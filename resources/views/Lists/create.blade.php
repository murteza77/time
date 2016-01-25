        @extends('layouts.master')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-2">

    {!! Form::open(array('route'=>'storelist', 'class'=>'form form-horizontal')) !!}
            <h3>Create your list</h3>
    <fieldset>
        <!-- Form Name -->
    <div class="form-group">
        {!! Form::label('List Name') !!}
        {!! Form::text('name', null,
        array('required','class'=>'form-control',
            'placeholder'=>'Murteza Zargar'))
        !!}
    </div>
        <div class="form-group">
            {!! Form::label('Description') !!}
            {!! Form::textarea('description', null,['class' => 'form-control input-md'],
            array('required','class'=>'form-control',
                'placeholder'=>'describe here '))
            !!}
        </div>

        <div class="form-group ">
              {!! Form::label('Categories') !!}

                  {!! Form::select('categories[]', $category, null,
                array('multiple'=>'multiple','name'=>'categories','class'=>'form-control')) !!}

        </div>


    <div class="form-group">
        {!! Form::submit('Create List', array('class'=>'btn btn-primary')) !!}
    </div>

    </fieldset>
    {!! Form::close() !!}
        </div>
    </div>
</div>
   


@endsection
