<x-layout>
        
        <div class="container-fluid bg-bianco min-vh-100">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <h1 class="text-center display-4 shadow text-marrone">{{$panino->name}}</h1>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6">
                    <img src="{{Storage::url($panino->img)}}" alt="" class="img-panino">
                </div>
                <div class="col-12 col-md-6">
                    <p class="text-marrone">{{$panino->description}}</p>
                </div>
            </div>
        </div>

    </x-layout>