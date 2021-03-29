@extends('layouts.app')
@section('title','Show Book')
@section('content')
    <div class="container" >
        <div class="center">
            <table class="table">
                <tr>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Author Address</th>
                  <th>ISBN</th>
                </tr>
                <tr>
                  <td>{{ $book->title }} </a></td>
                  <td>{{ $book->author }}</td>
                  <td>{{ $book->author_address }}</td>
                  <td>{{ $book->ISBN }}</td>
                </tr>
                
            </table>
            <a href="{{route('books.edit',$book)}}" class="btn btn-default">Edit</a>
            <a href="{{route('books.delete',$book)}}" class="btn btn-danger">Delete</a>
        </div>
    </div>    
@endsection