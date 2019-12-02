@extends ('common.user')
@section ('content')

<h1 class="brand-header">日報編集</h1>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => ['report.update', $report->id], 'method' => 'PUT']) !!}
    <div class="form-group form-size-small{{ $errors->has('reporting_time')? ' has-error' : '' }}">
      {!! Form::input('date', 'reporting_time', $report->reporting_time->format('Y-m-d'), ['class' => 'form-control']) !!}
      @foreach ($errors->get('reporting_time') as $message)
      <span class="help-block">{!! $message !!}</span>
      @endforeach
    </div>
    <div class="form-group{{ $errors->has('title')? ' has-error' : '' }}">
      {!! Form::input('text', 'title', $report->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
      @foreach ($errors->get('title') as $message)
      <span class="help-block">{!! $message !!}</span>
      @endforeach
    </div>
    <div class="form-group{{ $errors->has('content')? ' has-error' : '' }}">
      {!! Form::textarea('content', $report->content, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
      @foreach ($errors->get('content') as $message)
      <span class="help-block">{!! $message !!}</span>
      @endforeach
    </div>
    {!! Form::button('Update', ['class' => 'btn btn-success pull-right', 'type' => 'submit']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection

