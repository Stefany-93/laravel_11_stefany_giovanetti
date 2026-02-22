<x-layout>
        
    <div class="container-fluid bg-body-secondary">
        <div class="row h-75 justify-content-center align-items-center">
            <div class="col-12 mt-1 px-0 py-0 bg-bianco">
                <h1 class="text-center display-4 shadow text-marrone bg-rosa">
                    I TUOI PANINI
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center bg-bianco min-vh-100">
            @foreach ($paninos as $panino)
                <div class="col-12 col-md-3 py-5">
                    <div class="card" style="width: 18rem;">
                        <img src="\media\tuo.png" class="card-img-top" alt="...">
                            <div class="card-body bg-rosa text-marrone">
                                <h5 class="card-title">{{$panino->name}}</h5>
                                <p class="card-text">{{$panino->description}}</p>
                            </div>
                    </div>
                </div> 
            @endforeach
        </div>
    </div>

</x-layout>