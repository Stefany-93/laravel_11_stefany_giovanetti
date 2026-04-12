<div class="card mx-auto card-custom" style="width: 18rem;">
    <img src="{{Storage::url($panino->img)}}" alt="" class="sandwich-custom">
    <div class="card-body bg-rosa text-marrone">
        <h5 class="card-title">{{$panino->name}}</h5>
            <a href="{{ route('panini.show', compact('panino')) }}" class="btn btn-outline-danger">Scopri</a>
    </div>
</div>
