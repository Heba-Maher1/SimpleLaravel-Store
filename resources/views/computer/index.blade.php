@extends('layout')
@section('title' , 'Computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center text-gray-600 ">
        <h1> Computers</h1>
    </div>
    <div class="mt-8 relative">
        @if(count($computers) > 0)
        <ul class="flex">
            @foreach($computers as $computer)

            <a href="{{ route('computer.show' , ['computer' => $computer['id']])}}">
                <li>
                    <p>{{ $computer['name']}} ({{$computer['origin']}}) - <strong>{{$computer['price']}} </strong></p>

                </li>
            </a>

            @endforeach
        </ul>

        @else
        <p>There Are No Computers To Display</p>
        @endif
    </div>
</div>
@endsection