<x-layout>

    <div class="row justify-content-center">
        @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}

        </div>
        @endif

    </div>
    <div class="container ">
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                
                <h1 class="title">Un po' di Cinema</h1>
                
            </div>
            
        </div>
        <div class="row justify-content-center mt-5">
            @foreach ($movies as $movie)
            
            
            <div class="col-12 col-md-4">
                <div class="card image mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{  $movie->image }}" class="img-fluid dimension rounded-start" alt="{{$movie->name}}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Film: {{$movie->name}}</h5>
                                <h5 class="card-title">Genere: {{$movie->genre}}</h5>
                                <h5 class="card-title">{{$movie->cast}}</h5>
                                <h5 class="card-title">{{$movie->year}}</h5>
                                
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            @endforeach
        </div>
    </div>
    
</x-layout>