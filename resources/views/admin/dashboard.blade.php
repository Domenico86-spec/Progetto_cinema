<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">

                <h1 class="display-1">Accesso Amministratore {{Auth::user()->name}}</h1>
            </div>

        </div>
    </div>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}

    </div>

    @endif

    
        <div class="container my-5">
            <div class="row justify-content-center mt-5">
                <div class="col-12 text-center">
                    <h2>Richieste per il ruolo di Amministratore</h2>
                    <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>


                    
                </div>
            </div>
        </div>
    
</x-layout>