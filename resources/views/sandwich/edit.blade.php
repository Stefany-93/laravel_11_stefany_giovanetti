<x-layout>

    <div class="container-fluid">
        <div class="row height-custom align-items-center justify-content-center">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12">
                <h1 class="text-center display-4 title">Modifica il tuo panino</h1>
                <form class="py-3 px-5 box-bg shadow rounded" method="POST" action="{{ route('sandwich.update', compact('sandwich')) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Modifica il nome del tuo panino</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$sandwich->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Modifica la descrizione del tuo panino:</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{$sandwich->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Modifica la foto del tuo panino:</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
                    <button type="submit" class="btn btn-outline-light">Modifica il panino</button>
                </form>
            </div>
        </div>               
    </div>

</x-layout>