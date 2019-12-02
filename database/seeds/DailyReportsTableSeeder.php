<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DailyReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daily_reports')->truncate();
        DB::table('daily_reports')->insert([
            [
                'id'                => '1',
                'user_id'           => '1',
                'title'             => 'Title1',
                'content'           => 'Content1',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '2',
                'user_id'           => '1',
                'title'             => 'Title2',
                'content'           => 'Content2',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '3',
                'user_id'           => '1',
                'title'             => 'Title3',
                'content'           => 'Content3',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '4',
                'user_id'           => '1',
                'title'             => 'Title4',
                'content'           => 'Content4',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '5',
                'user_id'           => '1',
                'title'             => 'Title5',
                'content'           => 'Content5',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '6',
                'user_id'           => '1',
                'title'             => 'Title6',
                'content'           => 'Content6',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '7',
                'user_id'           => '1',
                'title'             => 'Title7',
                'content'           => 'Content7',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '8',
                'user_id'           => '1',
                'title'             => 'Title8',
                'content'           => 'Content8',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '9',
                'user_id'           => '1',
                'title'             => 'Title9',
                'content'           => 'Content9',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '10',
                'user_id'           => '1',
                'title'             => 'Title10',
                'content'           => 'Content10',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '11',
                'user_id'           => '1',
                'title'             => 'Title11',
                'content'           => 'Content11',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '12',
                'user_id'           => '1',
                'title'             => 'Title12',
                'content'           => 'Content12',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '13',
                'user_id'           => '1',
                'title'             => 'Title13',
                'content'           => 'Content13',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '14',
                'user_id'           => '2',
                'title'             => 'Title14',
                'content'           => 'Content14',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '15',
                'user_id'           => '2',
                'title'             => 'Title15',
                'content'           => 'Content15',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
            [
                'id'                => '16',
                'user_id'           => '2',
                'title'             => 'Title16',
                'content'           => 'Content16',
                'reporting_time'    => '2019-11-11',
                'created_at'        => Carbon::create(2019, 11, 29),
                'updated_at'        => Carbon::create(2019, 11, 29),
                'deleted_at'        => null,
            ],
        ]);
    }
}
