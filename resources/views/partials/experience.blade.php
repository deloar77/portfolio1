  <!-- Projects Section -->

  <section id="projects" class="py-20 bg-white">
   
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-12">experiences</h2>
        @foreach ($experiences as $experience )
       <div class="grid grid-row md:grid-row-3 gap-8">
        <div class="bg-gray-100 p-6 rounded-lg shadow">
          <h class="text-xl font-semibold mb-4">{{$experience['company']}}</h>
          <p class="mb-4">{{$experience['description']}}.</p>
          <h6 class="text-xl  mb-3 px-2">remarkable  projects under this company</h6>
           @foreach ($experience['projects'] as $project)
            <a href="{{route('project.show',['id'=>$project['id'],'company'=>$experience['company']])}}" class="inline-block px-4 py-2 bg-blue-500 text-white font-semibold text-sm rounded-lg shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 mx-3">{{$project['id']}} {{$project['title']}}</a>
          @endforeach
         
        </div>
        </div>
     @endforeach
    </div>
  </section>