@extends('layouts.app')

@section('content')

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">{{$album->name}}</h1>
        <p class="lead text-muted">{{$album->description}}</p>
        <p>
          <a href="/photo/upload/{{$album->id}}" class="btn btn-primary my-2"><i class="fas fa-solid fa-arrow-up-from-bracket"></i>Upload Photo</a>
          <a href="/albums" class="btn btn-secondary my-2">Back</a>
        </p>
      </div>
    </div>
  </section>
@if (count($album->photos) > 0)


<div class="row">
    @foreach ($album->photos as $photo)
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="/storage/albums/{{$album->id}}/{{$photo->photo}}" height="200px" class="card-img-top" alt="photo Image">
            <div class="card-body">
                <h5 class="card-title">{{$photo->name}}</h5>
                <p class="card-text">{{$photo->description}}</p>
                <a href="{{route('photos.show' , $photo->id)}}" class="btn btn-primary mb-2">View</a>

<!-- Form Komentar -->
<form method="POST" action="{{ route('comments.store', $photo->id) }}">
    @csrf
    <button type="submit" class="btn btn-success mb-2"><i class="fa-solid fa-comment"></i>Komentar</button>
        <textarea name="content" rows="3" placeholder="Tambahkan komentar"></textarea>

</form>
<!-- Daftar Komentar -->
@foreach ($photo->photoComments as $comment)
    <p>{{ $comment->user->name }}: {{ $comment->content }}</p>
@endforeach

            </div>
        </div>
    </div>
    @endforeach
</div>

  @else
    <p>No photos to display</p>
  @endif
@endsection
