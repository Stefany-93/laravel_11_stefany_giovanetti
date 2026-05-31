<div class="card mx-auto card-custom" style="width: 18rem;">
    <img src="{{ Storage::url($sandwich->img) }}" alt="Panino {{ $sandwich->name }}" class="img-panino">
    <div class="card-body bg-rosa text-marrone">
        <h5 class="card-title">{{ $sandwich->name }}</h5>
        <p>Creato da: {{ $sandwich->user->name }}</p>
        <div class="d-flex justify-content-between gap-2">
            <a href="{{ route('sandwich.show', compact('sandwich')) }}" class="btn btn-outline-danger">Scopri</a>
                    <a href="{{ route('sandwich.edit', compact('sandwich')) }}" class="btn btn-outline-danger">Modifica</a>
                    <form action="{{ route('sandwich.delete', compact('sandwich')) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">Elimina</button>
                    </form>
        </div>
    </div>
</div>
