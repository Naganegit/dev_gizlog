@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => 'report.store']) !!}
      <div class="form-group form-size-small{{ $errors->has('reporting_time')? ' has-error' : '' }}">
        {!! Form::input('date', 'reporting_time', Carbon::today()->toDateString(), ['class' => 'form-control']) !!}
        @foreach ($errors->get('reporting_time') as $message) 
          <span class="help-block">{!! $message !!}</span>
        @endforeach
      </div>
      <div class="form-group{{ $errors->has('title')? ' has-error' : '' }}">
        {!! Form::text('title', null,  ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        @foreach ($errors->get('title') as $message) 
          <span class="help-block">{!! $message !!}</span>
        @endforeach
      </div>
      <div class="form-group{{ $errors->has('content')? ' has-error' : '' }}">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
        @foreach ($errors->get('content') as $message) 
          <span class="help-block">{!! $message !!}</span>
        @endforeach
      </div>
      {!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection