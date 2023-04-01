<x-main>

  
  <ul>
    @foreach ($corsi as $corso)
    <x-card :$corso />
      {{-- <li><a href="{{route('show', ['id' => $corso['id']])}}">{{$corso['name']}}</a></li> --}}
    @endforeach 
  </ul>

</x-main>