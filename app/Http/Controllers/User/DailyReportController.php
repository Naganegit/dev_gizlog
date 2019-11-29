<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DailyReport;
use Auth;
use Validator;

class DailyReportController extends Controller
{
    private $report;

    public function __construct(DailyReport $dailyReport)
    {
        $this->middleware('auth');
        $this->report = $dailyReport;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $reports = $this->report->all();
        // $reports = $this->report->getByUserId(Auth::id());
        return view('user.daily_report.index', compact('reports'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.daily_report.create', compact('reports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $validatedData = Validator::make($inputs, [
            'reporting_time' => 'required|before:tomorrow',
            'title' => 'required|max:30',
            'content' => 'required|max:1000',
        ])->validate();

        $inputs['user_id'] = Auth::id();
        $this->report->fill($inputs)->save();
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.daily_report.show');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.daily_report.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'reporting_time.before' => '今日以前の日付を入力してください。',
            'title.max' => '30文字以内で入力してください。',
            'content.max' => '1000文字以内で入力してください。',
        ];
    }
}
