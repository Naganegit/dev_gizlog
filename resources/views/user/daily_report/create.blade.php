@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container">
  {!! Form::open(['route' => 'report.store']) !!}
    {!! Form::hidden('user_id', Auth::id(), ['class' => 'form-control']) !!}
    <div class="form-group form-size-small">
      {!! Form::input('date', 'reporting_time', null, ['class' => 'form-control']) !!}
      <span class="help-block"></span>
    </div>
    <div class="form-group">
      {!! Form::text('title', null,  ['class' => 'form-control', 'placeholder' => 'Title']) !!}
      <span class="help-block"></span>
    </div>
    <div class="form-group">
      {!! Form::textarea('contents', null, ['class' => 'form-control', 'placeholder' => 'Content', 'cols' => '50' , 'rows' => '10']) !!}
      <span class="help-block"></span>
    </div>
    {!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}
  {!! Form::close() !!}
  </div>
</div>

@endsection

