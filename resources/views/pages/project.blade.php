@extends('layouts.app')
@section('content')
    <!-- Project Section -->
  <section id="projects" class="py-20 bg-white">
    <div class="container mx-auto px-4 text-center">
      
      

        <div class="bg-gray-100 p-6 rounded-lg shadow">
          <h3 class="text-xl font-semibold mb-4">{{$project['title']}}</h3>
          <p class="mb-4">{{$project['description']}}.</p>
          <a href="{{$project['link']}}" class="text-blue-600 hover:underline">View Project</a>
        </div>


    </div>
  </section>
@endsection