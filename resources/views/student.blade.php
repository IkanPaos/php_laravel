@extends('layouts.mainlayout')
@section('title','Student')
@section('content')
        <h1>Halaman Student</h1>
        <h3>List</h3>
        <ol>
            @foreach ($studentList as $data)
            <li>{{$data->name}} || {{$data->gender}} || {{$data->nis}}</li>
            @endforeach
        </ol>
        
@endsection