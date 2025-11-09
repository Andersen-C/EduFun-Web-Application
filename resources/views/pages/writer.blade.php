@extends('template.main')
@section('Title', 'Writers Page')

@section('konten')
<h1 class='fs-bold' style="padding: 40px;">Our Writers:</h1>

<div class="container text-center mt-4">
  <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
      @foreach ($writers as $index => $writer)
          <div class="col" style="max-width: 22rem;">
              <div class="card bg-transparent border-0 h-100 position-relative mx-auto">
                  <img src="{{ $images[$index % count($images)]}}" class="card-img-top rounded-circle" alt="{{ $writer->name }}">
                  <div class="card-body">
                      <h5 class="card-title">{{ $writer->name }}</h5>
                      <p class="card-text text-muted text-black">Spesialis {{ $writer->category->name }}</p>
                      <a href="{{ route('page.writer.index', $writer->id) }}" class="stretched-link"></a>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</div>
@endsection