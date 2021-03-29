@extends('layouts.app')
@section('title','Books')
@section('content')
    @if (count($books) >0)
    <table class ="table">
        <tr>
            <th>title</th>
            <th>author</th>
            <th>ISBN</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td><a href="{{ route('books.show',$book) }}"> {{ $book->title }} </a> </td>
                <td>{{$book->author}}</td>
                <td>{{$book->ISBN}}</td>
                <td><a href="{{route('books.edit',$book)}}">Edit</a></td>
                <td><a href="{{route('books.delete',$book)}}">Delete</a></td>
            </tr>           
        @endforeach
    </table>

    {{ $books->links() }}

    @else
        <h3>There is no book.</h3>
    @endif
    @endsection
