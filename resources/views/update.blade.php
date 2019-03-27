@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12 ">

        <form action="{{ route('todos.save', ['id'=> $todo->id]) }}" method="post">
                {{ csrf_field() }}
        <input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}" placeholder="Create new Todo">

    </form>
    </div>
</div>
<hr>

    {{-- @foreach($todos as $todo) 
{{$todo->todo}} <a href="{{ route('todo.delete', ['id'=>$todo->id]) }}" class="btn btn-danger">x</a>
<a href="{{ route('todo.update', ['id'=>$todo->id]) }}" class="btn btn-info btn-xs">Update</a>
        <hr>
    @endforeach --}}

@stop