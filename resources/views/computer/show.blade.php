@extends('layout')
@section('title' , 'Show Computer')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center text-gray-600 ">
        <h1> Computers</h1>
    </div>
    <div class="text-center">
        <h3>{{ $computer['name']}} ({{$computer['origin']}}) - <strong>{{$computer['price']}} </strong></h3>
        <div class="btn-container">
            <a class="btn edit" href="{{route('computer.edit' , $computer->id)}}">
                Edit
            </a>

            <form action="{{route('computer.destroy' , $computer->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn delete">

            </form>


        </div>

    </div>


</div>
@endsection