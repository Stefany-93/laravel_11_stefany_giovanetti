<x-layout>

    <div class="container-fluid">
        <div class="row height-custom align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 title">Crea il tuo panino</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="py-3 px-5 box-bg shadow rounded" method="POST" action="{{route('panini.submit')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Inserisci il nome del tuo panino</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrivi il tuo panino:</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{old('description')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci la foto del tuo panino:</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
                    <button type="submit" class="btn btn-outline-light">Crea il panino</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>