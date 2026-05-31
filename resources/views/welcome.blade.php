<x-layout>
    <div class="container-fluid">
        @if (session()->has('emailSent'))
            <div class="alert alert-danger">
                {{ session('emailSent')}}
            </div>
        @endif
        @if (session()->has('emailError'))
            <div class="alert alert-warning">
                {{ session('emailError')}}
            </div>
        @endif
        @if (session()->has('successMessage'))
            <div class="alert alert-danger">
                {{ session('successMessage')}}
            </div>
        @endif
        <div class="row height-custom align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-1 title">MORTADELLOVE</h1>
            </div>
        </div>
    </div>
</x-layout>