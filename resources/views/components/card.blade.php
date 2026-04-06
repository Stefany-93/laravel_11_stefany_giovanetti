<div class="card mx-auto card-custom" style="width: 18rem;">
    <img src="{{$sandwich['img']}}" alt="" class="img-custom">
    <div class="card-body bg-rosa text-marrone">
        <h5 class="card-title">{{$name}}</h5>
        <a href="{{route('panini.show', ['id' => $id])}}" class="btn btn-outline-danger">Scopri il panino</a>
    </div>
</div>