<x-main> 
  <div class="container py-4">
  
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
    <form action="{{route('send')}}" method="POST">

      @csrf
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input class="form-control" type="text" placeholder="Nome da inserire" name="name" value="{{old('name')}}"/>

        @error('name')
          <span class="bg-danger">Errore</span>
        @enderror
      </div>
  
      <!--  -->
      <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input class="form-control" type="text" placeholder="" name="phone" value="{{old('phone')}}"/>Telefono
      </div>
    <!--  -->
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input class="form-control" type="text" placeholder="Email" name="email" value="{{old('email')}}"/>
      </div>
      <!-- -->
      <div class="mb-3">
        <label class="form-label" >Messaggio</label>
        <textarea name="message" class="form-control" type="text" placeholder="Messaggio" style="height: 10rem;">{{old('message')}}</textarea>
      </div>
  
      <!--  -->
      <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg" >Invia</button>
        <button type="reset" class="btn btn-danger btn-lg" >Reset</button> 
      </div>
  
    </form>
  
  </div>
</x-main>