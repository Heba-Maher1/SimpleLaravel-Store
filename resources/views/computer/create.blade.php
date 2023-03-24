@extends('layout')
@section('title' , 'Create Computer')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="flex justify-center text-gray-600 ">

        <form action="{{route('computer.store')}}" method="post" class="form p-6">
            <div class="flex justify-center text-gray-200 ">
                <h1>Create A New Computer</h1>
            </div>
            @csrf
            <div>
                <!-- <label for="computer-name">Computer Name</label> -->
                <input type="text" id="computer-name" value="{{old('computer-name')}}" name="computer-name" placeholder="Enter Computer Name">
                @error('computer-name')
                <div class="form-error flex justify-center">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <!-- <label for="computer-origin">Computer Origin</label> -->
                <input type="text" id="computer-origin" name="computer-origin" placeholder="Enter Computer Origin">
                @error('computer-origin')
                <div class="form-error flex justify-center">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <!-- <label for="computer-price">Computer Price</label> -->
                <input type="text" id="computer-price" name="computer-price" placeholder="Enter Computer Price">
                @error('computer-price')
                <div class="form-error flex justify-center">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection