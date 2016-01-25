@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                {!! Form::open(array('route'=>'storecategory', 'class'=>'form form-horizontal')) !!}
                <fieldset>
                    <!-- Form Name -->
                    <div class="form-group">
                        {!! Form::label('Category Name') !!}
                        {!! Form::text('name', null,
                        array('required','class'=>'form-control',
                            'placeholder'=>'Category'))
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Create Category', array('class'=>'btn btn-primary')) !!}
                    </div>

                </fieldset>
                {!! Form::close() !!}
            </div>
        </div>
    </div>



@endsection
