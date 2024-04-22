@extends('layouts.app')

@section('content')

<h1>{{$photo->title}}</h1>
<a href="/albums/{{$photo->album->id}}" class="btn btn-secondary m-3">Back</a>
<div>
    <img src="/storage/albums/{{$photo->album->id}}/{{$photo->photo}}" alt="" height="300px">
</div>
<form action="{{route('photos.destroy' , $photo->id)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger m-3"><i class="fa-solid fa-trash"></i>Hapus</button>
</form>


@endsection
