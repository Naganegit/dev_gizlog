<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyReport extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'reporting_time',
    ];

    protected $dates = [
        'reporting_time',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function getDailyReports($user_id, $searchText)
    {
        return $this->where('user_id', $user_id)
                    ->where(function($query) use ($searchText) {
                        if (!empty($searchText)) {
                            $query->where('reporting_time', 'like', $searchText.'%');
                        }
                    });
    }
}
