 <!-- Hero Section -->



  <section class="bg-blue-600 text-white h-screen flex items-center">
    <div class="container mx-auto px-4 text-center">
   
      <h1 class="text-4xl md:text-6xl font-bold mb-6"> {{$profile['name']}}</h1>
      <p class="text-lg md:text-2xl mb-6">{{$profile['bio']}}</p>
         <img src="{{$profile['profile_image']}}" class="h-44 w-44 mx-auto  rounded-full my-5" alt="">
      <a href="#projects" class="bg-white text-blue-600 px-6 py-3 rounded-lg shadow hover:bg-gray-200">View My Work</a>
    </div>
  </section>