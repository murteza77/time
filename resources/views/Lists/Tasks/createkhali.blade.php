@extends('layouts.master')

@section('content')
        <!-- Button trigger modal -->


    <h4>Create Your new Task here and Add productivity to your day edited</h4>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                
                 {!! Form::open(array('route'=>'storetask', 'class'=>'form-group')) !!}

            <div class="form-group">
            {!! Form::label('Task Name') !!}
            {!! Form::text('name', null,
            array('required','class'=>'form-control', 'placeholder'=>'Add you task'))
             !!}
           </div>
            <div class="form-group">
                {!! Form::label('Task Description') !!}
                {!! Form::text('description', null,
                array('required','class'=>'form-control', 'placeholder'=>'Add you task'))
                 !!}
            </div>

            

            <div class="form-group">
                {!! Form::label('Attachment') !!}
                {!! Form::file('fileupload', null,
                array('required','class'=>'form-control', 'placeholder'=>'Attach files here'))
                 !!}
            </div>
            
    {!! Form::close() !!}
            </div>
        </div>
    </div>

   

@endsection