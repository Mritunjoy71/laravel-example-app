@extends('layouts.app')
@section('title','Create Book')
@section('content')
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="form-group" >
      <label for="title">Title</label>
      <input type="text" name="title" value="{{ old('title') }}"class="form-control" id="title"  placeholder="Enter title">
    </div>

    <div class="form-group" >
      <label for="author">author</label>
      <input type="text" name="author" value="{{ old('author') }}" class="form-control" id="author"  placeholder="">
    </div>

    <div class="form-group" >
      <label for="author_address">author_address</label>
      <input type="textarea" name="author_address" value="{{ old('author_address') }}" class="form-control" id="author_address"  placeholder="Enter author_address">
    </div>

    <div class="form-group" >
      <label for="ISBN">ISBN</label>
      <input type="number" name="ISBN" value="{{ old('ISBN') }}" class="form-control" id="ISBN"  placeholder="Enter number">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
    