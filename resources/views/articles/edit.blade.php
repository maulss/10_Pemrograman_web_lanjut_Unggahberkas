@extends('layout')
@section('content')
<div class="container mt-4">
<h3>Edit Data Article</h3>
<form action="/articles/{{$article->id}}" method="post"enctype="multipart/form-data">
@csrf
@method('put')
<div class="form-group">
<label for="title">Judul</label>
<input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"></br>
</div>
<div class="form-group">
<label for="content">Content</label>
<input type="text" class="form-control" required="required" name="content" value="{{$article->content}}"></br>
</div>
<div class="form-group">
<label for="image">Feature Image</label>
<input type="file" class="form-control" required="required" name="image" value="{{$article->featured_image}}"></br>
<img width="150px" src="{{asset('storage/'.$article->featured_image)}}">
</div>
<button type="submit" class="btn btn-primary float-right">Ubah Data</button>
<a href="/articles" class="btn btn-danger">Kembali</a>
</form>
</div>
@endsection