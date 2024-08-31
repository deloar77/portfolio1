
  <!-- Navbar -->
  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    
      <h1><a href="{{route('home')}}" class="text-xl font-bold">{{$profile['name']}}</a></h1>
      <nav>
        <ul class="flex space-x-6 px-10">
          <li><a href="{{route('experiences')}}" class="hover:text-blue-500">experiences</a></li>
          
        </ul>
      </nav>
    </div>
  </header>