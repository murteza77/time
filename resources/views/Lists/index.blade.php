@extends('layouts.master')

@section('content')
<style>
    .custab{
        border: 1px solid #ccc;
        padding: 5px;
        margin: 5% 0;
        box-shadow: 3px 3px 2px #ccc;
        transition: 0.5s;
    }
    .custab:hover{
        box-shadow: 3px 3px 0px transparent;
        transition: 0.5s;
    }
</style>

</div>
    <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                <a href="{{ URL::route('createlist') }}" class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-plus"></span> Add List</a>
                <a href="{{ URL::route('createcategory') }}" class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-plus"></span> Add Category</a>

                <tr>

                    <th>ID</th>
                    <th>List</th>
                    <th>Description</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                @foreach($list as $lists)
                <tr>
                    <td>{{ $lists->id }}</td>
                    <td>{{$lists->name }}</td>
                    <td>{{$lists->description }}</td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="{{URL::route('editlist', [$lists->id])}}"><span class="glyphicon glyphicon-edit"></span>Edit List</a>
                    </td>
                    <td>
                        {!! Form::open(['route'=>['deletelist', $lists->id], 'method'=> 'delete'])  !!}
                        <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span>Delete List  </button>
                        {!! Form::close() !!}
                    </td>

                    <td><a class="btn btn-primary btn-xs" href="{{URL::route('showlist', [$lists->id])}}">show more</a>

                    </td>
                    </td>
                    <td>
                        <a class="btn btn-success btn-xs" href="{{URL::route('createtask', ['list_id'=> $lists->id])}}">Add Task </a>

                    </td>
                </tr>
              @endforeach
            </table>
        </div>
    </div>
@endsection


