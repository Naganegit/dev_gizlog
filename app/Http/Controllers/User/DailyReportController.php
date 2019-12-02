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
    public function index(Request $request)
    {
        $searchText = $request->get('search-month');
        $reports = $this->report->where('user_id', Auth::id());
        if (!empty($searchText)) {
            $reports = $reports->where('reporting_time', 'like', "$searchText%");
        }
        $reports = $reports->orderBy('reporting_time', 'desc')->paginate(10);
        return view('user.daily_report.index', compact('reports','searchText'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.daily_report.create');
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
        $inputs['user_id'] = Auth::id();
        $this->validateInputReport($inputs);
        $this->report->create($inputs);
        return redirect()->route('report.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = $this->report->find($id);
        return view('user.daily_report.show', compact('report'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = $this->report->find($id);
        return view('user.daily_report.edit', compact('report'));
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
        $inputs = $request->all();
        $inputs['user_id'] = Auth::id();
        $this->validateInputReport($inputs);
        $this->report->find($id)->fill($inputs)->save();
        return redirect()->route('report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->report->find($id)->delete();
        return redirect()->route('report.index');
    }

    /**
     * Check the validation of inputed records.
     *
     * @param  int  $inputs
     * @return \Illuminate\Validation\Validator
     */
    public function validateInputReport($inputs)
    {
        return Validator::make($inputs, $validationRules = [
            'reporting_time' => 'required|before:tomorrow',
            'title' => 'required|max:30',
            'content' => 'required|max:1000',
        ], $errorMessages = [
            'required' => '入力必須の項目です。',
            'reporting_time.before' => '今日以前の日付を入力してください。',
            'title.max' => '30文字以内で入力してください。',
            'content.max' => '1000文字以内で入力してください。',
        ])->validate();
    }
}
