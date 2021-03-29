@extends('layouts.app')
@section('title','Delete Book')
@section('content')
    <div class="container">
        <div class="center">
            <p>Are you sure to delete?</p>
            <a href="{{route('books')}}" class="btn btn-default">Cancel</a>
            <a href="{{route('books.destroy',$book)}}" class="btn btn-danger">Yes</a>
        </div>
    </div>
@endsection