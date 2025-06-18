<x-layout>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 ">
                <h1 class="display-1">{{$article->title}}</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($article->image)}}" class="img-fluid" alt="Immagine dell'articolo: {{$article->title}}">
                <div class="text-center">
                    <h2>{{$article->description}}</h2>
                    <p class="fs-5">Genere:
                        <a href="#" class="text-decoration-none">{{$article->genre->name}}"></a>
                    </p>
                </div>
                <div class="text-center">
                    <a href="{{route('homepage')}}" class="btn btn-primary">Torna alla lista</a>
                </div>
                <div class="card-footer d-flex justify-content-between align items-center">
                                    <a href="{{route('article.show')}}" class="btn btn-primary">Leggi</a>

                                </div>
            </div>

        </div>
    </div>
</x-layout>