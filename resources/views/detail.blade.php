<x-layout>
        <div class="container-fluid">
            <div class="row justify-content-center vh-100">
                <div class="col-12 col-md-8 py-5">
                    {{-- @dump($equipment) --}}
                    <h1 class="display-4">Dettaglio equipaggiamento: <span class="fw-bold">{{$equipment['name']}} </span></h1>

                    <h4 class="py-5">Categoria dell'equipaggiamento</h4>
                    <p>{{$equipment['equipment_category']['name']}}</p>
    
                    <h4 class="py-5">Peso dell'equipaggiamento</h4>
                    <p>{{$equipment['weight']}}</p>
                </div>
            </div>
        </div>
</x-layout>