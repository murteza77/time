@extends('layouts.master')

@section('content')
        <!-- Button trigger modal -->
  <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Add the Tasks here</h2>

    {!! Form::open(array('route'=>'storetask', 'class'=>'form-group')) !!}

            <div class="form-group">
            {!! Form::label('Task Name') !!}
            {!! Form::text('name', null,
            array('required','class'=>'form-control', 'placeholder'=>'Add you task'))
             !!}
           </div>
            <div class="form-group">
                {!! Form::label('Task Description') !!}
                {!! Form::textarea('description', null,
                array('required','class'=>'form-control', 'placeholder'=>'Add you task'))
                 !!}
            </div>

            <div class="form-group">
                {!! Form::label('Task Importance') !!}
                {!! Form::select('priority',$options,
                array('required','class'=>'form-control', 'placeholder'=>'Status of the task'))
                 !!}
            </div>

            <div class="form-group">
                {!! Form::label('Attachment') !!}
                {!! Form::file('fileupload', null,
                array('required','class'=>'form-control', 'placeholder'=>'Attach files here'))
                 !!}
            </div>
            {!!  Form::hidden('list_id',$id) !!}
            <div class="form-group">
                {!! Form::submit('Submit List Now', array('class'=>'btn btn-primary')) !!}
            </div>
    {!! Form::close() !!}

    </div>
    </div>
    </div>

@endsection