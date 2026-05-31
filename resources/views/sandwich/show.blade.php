<x-layout>
    <div class="container-fluid bg-bianco min-vh-100 py-5">

        <div class="row align-items-center mb-4 text-center">
            <div class="col-12 col-md-6">
                <h1 class="display-4 text-marrone title-custom mb-3">
                    {{ $sandwich->name }}
                </h1>

                <h4 class="text-marrone subtitle-custom">
                    {{ $sandwich->description }}
                </h4>
            </div>

            <div class="col-12 col-md-6 text-center">
                <img src="{{ Storage::url($sandwich->img) }}" 
                     alt="Sandwich {{ $sandwich->name }}" 
                     class="sandwich-show-img">
            </div>
        </div>

    </div>
</x-layout>
