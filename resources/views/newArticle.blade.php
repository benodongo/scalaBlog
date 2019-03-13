@extends('master')
@section('content')
    <form action="{{url('/saveArticle')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="Title" required>
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" class="form-control" name="Author" required>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="Date" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea rows="5" class="form-control" name="Description">

            </textarea>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
    @endsection