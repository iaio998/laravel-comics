@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="bg-black text-white py-5">
        <div class="container">
            <div class="row">
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input value="{{old($comic->title)}}" class="form-control my-1" type="text" id="title" name="title"
                        placeholder="{{$comic->title}}">
                    <input value="{{old($comic->description)}}" class="form-control my-1" type="text" id="description"
                        name="description" placeholder="{{$comic->description}}">
                    <input value="{{old($comic->thumb)}}" class="form-control my-1" type="text" id="thumb" name="thumb"
                        placeholder="Image">
                    <input value="{{old($comic->price)}}" class="form-control my-1" type="text" id="price" name="price"
                        placeholder="Price">
                    <input value="{{old($comic->series)}}" class="form-control my-1" type="text" id="series"
                        name="series" placeholder="Description short">
                    <input value="{{old($comic->type)}}" class="form-control my-1" type="text" id="type" name="type"
                        placeholder="Type">
                    <button class="btn btn-primary" type="submit">Add</button>
                </form>
            </div>
        </div>
    </div>

    <div class="final-one">
        <div class="container">
            <div class="row">
                <div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection