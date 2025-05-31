<x-layout>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                <h1>Movies</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('store')}}">
                    @csrf
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>