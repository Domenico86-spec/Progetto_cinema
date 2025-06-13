<x-layout>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                <h1>Movies</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('create')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Titolo</label>
                                <input type="text" class="form-control"  name="title">
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Immagine</label>
                                <input type="file" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Descrizione </label>
                                <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea">
                            </div>
                             <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Movie</label>
                                <select name="movie" id="movie" class="form-control">
                                    @foreach ($movies as $movie)
                                    <option value="{{$movie->id}}">{{$movie->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3 d-flex justify-content-center flex-column align-items-center">

                                <button type="submit" class="btn btn-primary">Inserisci articolo</button>
                                <a href="{{route('homepage')}}" class="btn btn-primary mt-2">Torna alla Home</a>
                            </div>
                            
                            
                            
                            
                </form>
            </div>
        </div>
    </div>
</x-layout>