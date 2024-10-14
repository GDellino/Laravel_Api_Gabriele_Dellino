<x-layout>
    <div class="container">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center">
                    Elenco degli equipaggiamenti
                </h1>
            </div>
            @foreach ($equipments as $eq)
                <div class="col-12 col-md-4 my-2">
                    <div class="card shadow rounded">
                        <div class="card-body text-center">
                            <h5 class="card-title"> {{ $eq['name'] }} </h5>
                            <p class="text-muted fst-italic"> {{ $eq['index'] }} </p>
                            <div class="text-center">
                                <a href="{{route('detail', ['index'=>$eq['index']])}}" class="btn btn-secondary">Dettaglio</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>