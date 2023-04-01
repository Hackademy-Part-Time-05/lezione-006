<x-main>
 Pagina Principale
 @foreach ($corsi as $corso)
 <x-card :$corso />
@endforeach 
</x-main>