@extends('layouts.master')


@section('content')
  
<div class="container">
    <div class="row">
        <div class="col-sm-6">

    {!! Form::model($list, array('method'=>'put', 'route'=>['updatelist', $list->id], 'class'=> 'form')) !!}
    <div>
        {!! Form::label('List Name') !!}
        {!! Form::text('name', null, array('required', 'class'=>'form-control',
         'placeholder'=>'Safar be Amrica')) !!}
    </div>

    <div>
        {!! Form::label('List Description') !!}
        {!! Form::textarea('description', null, array('required', 'class'=>'form-control',
         'placeholder'=>'Things to do')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('update List', array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}

    </div>
    </div>
    </div>

@endsection