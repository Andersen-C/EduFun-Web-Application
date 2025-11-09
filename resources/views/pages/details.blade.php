@extends('template.main')
@section('Title', $course->name)

@section('konten')
<h3 style="padding: 20px;">{{ $course->category->name}}</h3>
<div class="card bg-transparent border-0 d-block mx-auto" style="width: 70rem;">
  <img src="{{ $image }}" class="card-img-top img-fluid d-block mx-auto rounded" style = "margin: 20px; width: 70rem;" alt="{{ $course->name }}">
  <div class="card-body">
    <h5 class="card-title">{{ $course->name}}</h5>
    <small class="text-muted">{{ $course->created_at->format('d M Y') }} | by: {{ $course->writer->name }}</small>
    <br>
    <p class="card-text fs-5 fw-semibold">{{$course->description}}</p>
  </div>
</div>

@endsection