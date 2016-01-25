@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col col-sm-6">
                <h4>{{ $list->name}} </h4>
                <p>
                     {{ $list->description }}
                </p>

                <h4>Tasks</h4>

                @if($list->tasks->count() > 0)
                    <ul>
                        @foreach( $list->tasks as $task)
                            <li>{{ $task->name }}</li>
                        @endforeach
                    </ul>
                @else
                    You dont have any task  Click here to add your task to your list
                    <a href="{{ URL::route('createtask', [$list->id]) }}" class="btn btn-primary btn-md"> Click to Add task</a>
                @endif


            </div>
        </div>
    </div>


@endsection
