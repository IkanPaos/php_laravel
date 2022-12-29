@extends('layouts.mainlayout')
@section('title','Home')
@section('content')
        <h1>Halaman Home</h1>
        <h2>du yu no da wae {{$role}} {{$name}}</h2>
    
        <table class="table">
            
            <tr>
                <th>no</th>
                <th>Buah</th>
            </tr>

            @foreach ($buah as $data)
            <tr> 
                <td>
                    {{$loop -> iteration}}
                </td>
                <td>
                    {{$data}} <br>
                </td>   
            </tr>
            @endforeach
        </table>
@endsection