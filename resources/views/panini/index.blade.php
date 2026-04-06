<x-layout>
        
    <div class="container-fluid bg-body-secondary">
        <div class="row h-75 justify-content-center align-items-center">
            <div class="col-12 mt-1 px-0 py-0 bg-bianco">
                <h1 class="text-center display-4 shadow text-marrone bg-rosa">
                    PANINI
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center bg-bianco min-vh-100">
            @foreach ($sandwiches as $sandwich)
                <div class="col-12 col-md-3 py-5">
                    <x-card
                        :sandwich="$sandwich"
                        name="{{$sandwich['name']}}"
                        id="{{$sandwich['id']}}"
                        description="{{$sandwich['description']}}"
                        img="{{$sandwich['img']}}"
                        >
                    </x-card>
                </div> 
            @endforeach
        </div>
    </div>

</x-layout>