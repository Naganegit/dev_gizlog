<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyReport extends Model
{
    use SoftDeletes;

    const ITEMS_PER_PAGE = 10;

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
            ->when(!empty($inputs['search-month']), 
                function ($query) use ($inputs) {
                    return $query->where('reporting_time', 'like', $inputs['search-month'] . '%');
                })
            ->orderBy('reporting_time', 'desc')
            ->paginate(self::ITEMS_PER_PAGE);
    }
}
