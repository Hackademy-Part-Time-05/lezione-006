

<div @class([
            'col-lg-4 mb-5',
            'text-danger' => true,
            'text-succes' => false,
            ])
>
    <div class="card h-100 shadow border-0" data-aos="zoom-in">
        {{-- <img class="card-img-top" src="{{$corso['image']}}" alt="..." /> --}}
        <div class="card-body p-4" >
            {{-- <div class="badge bg-danger bg-gradient rounded-pill mb-2">{{$corso['livel']}}</div> --}}
            <a class="text-decoration-none link-dark stretched-link" href="{{route('show',['id'=>$corso['id']])}}"><h5 class="card-title mb-3">{{$corso['name']}}</h5></a>
            {{-- <p class="card-text mb-0 py-3">{{$corso['description']}}</p> --}}
            <a class="btn btn-danger px-4 me-sm-3" href="{{route('show',['id'=>$corso['id']])}}">Vedi</a>
        </div>
       
    </div>
</div>