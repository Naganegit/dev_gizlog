<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyReport extends Model
{
    use SoftDeletes;

    private $options = [
        'sort_column' => 'reporting_time',
        'items_per_page' => 10,
    ];

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'reporting_time',
    ];

    protected $dates = [
        'reporting_time',
    ];

    /**
     * Return the reports associated with auth login user.
     * If search text was inputted, Return the reports, which narrowed down by search text, of login user.
     * 
     * @return \Illuminate\View\View
     */
    public function getDailyReports($inputs)
    {
        return $this->where('user_id', $inputs['user_id'])
            ->when($inputs['search-month'], 
                function ($query) use ($inputs) {
                    return $query->where('reporting_time', 'like', $inputs['search-month'] . '%');
                })
            ->orderBy($this->options['sort_column'], 'desc')
            ->paginate($this->options['items_per_page']);
    }

    public function fetchDataToUse($request, $userId)
    {
        $inputs = $request->only('reporting_time', 'title', 'content');
        $inputs['user_id'] = $userId;
        return $inputs;
    }
}
