@extends('layout')
@section('content')
<div class="container mt-4">
<h3>Tambah Data Article</h3>
<form action="/articles" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="title">Title: </label>
<input type="text" class="form-control" required="required" name="title"></br>
<label for="content">Content: </label>
<textarea type="text" class="form-control" required="required" name="content"></textarea></br>
<label for="image">Feature Image: </label>
<input type="file" class="form-control" required="required" name="image"/></br>
<button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
<a href="/articles" class="btn btn-danger">Kembali</a>
</div>
</form>
</div>
@endsection