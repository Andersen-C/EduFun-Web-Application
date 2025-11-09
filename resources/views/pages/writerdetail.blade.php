@extends('template.main')
@section('Title', $writer->name)

@section('konten')
<div class="container py-4">
    <div class="row mt-1 g-0">
      <div class="col-sm-2">
          <div class=" d-flex justify-content-center align-items-center">
            <img src="{{ $image }}" alt="{{ $writer->name }}" class="img-fluid rounded-circle" 
            style="width: 120px; height: 100px;">
          </div>
      </div>
      <div class="col-sm-10">
          <div>
            <h5 class="fw-bold fs-5 mb-1">{{ $writer->name }}</h5>
            <br>
            <p class="fs-4 mb-0">Spesialis {{ $writer->category->name}}</p>
          </div>
      </div>
    </div>
</div>

<div class="container py-3">
  @foreach ($writer->courses as $course)
    <div class="row mt-4">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card bg-transparent h-100 border-0">
          <div class="card-body d-flex justify-content-center align-items-center">
            <img src="{{ $imageCourse[$course->id] }}" alt="{{ $course->name }}" class="img-fluid rounded-3">
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="card bg-transparent border-0">
          <div class="card-body">
            <h5 class="card-title">{{ $course->name }}</h5>
            <small class="text-muted">{{ $course->created_at->format('d M Y') }} | by: {{ $course->writer->name}}</small>
            <p class="card-text">{{ Str::limit($course->description, 100)}}</p>
            <div class="d-flex justify-content-end">
              <a href="{{ route('page.course.index', $course->id) }}" class="btn btn-primary rounded-2">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>

@endsection