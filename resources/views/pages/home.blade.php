@extends('template.main')
@section('Title', 'Home')

@section('konten')
<div style="background-image: url('{{ asset('image/young-students-learning-together-group-study.jpg') }}');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  width: 100%;
  height: 100vh;">
</div>

@php
    // credit = 
    // 1. HCI Picture -> https://www.geeksforgeeks.org/system-design/introduction-to-human-computer-interface-hci/
    // 2. User Experience Picture -> https://www.geeksforgeeks.org/techtips/user-experience-or-ux-design/
    // 3. User Experience for Digital Immersive Technology Picture -> https://www.futurevisual.com/blog/immersive-technology/
    // 4. Pattern Software Design Picture -> https://www.geeksforgeeks.org/system-design/software-design-patterns/
    // 5. Agile Software Development -> https://www.geeksforgeeks.org/software-engineering/software-engineering-agile-software-development/
    // 6. Code Reengineering -> https://www.geeksforgeeks.org/software-engineering/software-engineering-re-engineering/
    $image1 = [asset('image/Human Computer Interaction.jpg'), 
                asset('image/User Experience.jpg'),
                asset('image/User Experience for immersive technologies.jpg'),
                asset('image/Pattern Software Design.jpg'),
                asset('image/Agile-Software-Development1-660.png'), 
                asset('image/code-reenginering.jpg')];
@endphp

<div class="container py-3">
  @foreach ($courses as $index => $course)
    <div class="row mt-4">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card bg-transparent h-100 border-0">
          <div class="card-body d-flex justify-content-center align-items-center">
            <img src="{{ $image1[$index % count($image1)] }}" alt="{{ $course->name }}" class="img-fluid rounded-3">
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
