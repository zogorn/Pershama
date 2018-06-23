@extends('layouts.master')

@section('content')
    <ul>
        @foreach ($tasks as $task)
            <li><a href="/tasks/{{$task->id}}">{{$task->body}}</a></li>
        @endforeach
    </ul>
@endsection
