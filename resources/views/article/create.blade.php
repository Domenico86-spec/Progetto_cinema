<x-layout>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                <h1>Films</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('article.store')}}" class="p-5 shadow" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Titolo</label>
                                <input type="text" class="form-control"  name="title">
                            </div>
                             <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Film</label>
                                <select name="film" id="">
                                    @foreach ($movies as $movie)
                                    <option value="{{$movie->id}}">{{$movie->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Immagine</label>
                                <input type="file" class="form-control" id="exampleInputPassword1" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Descrizione </label>
                                <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                            </div>
                            
                            
                            
                                <button type="submit" class="btn btn-primary">Inserisci articolo</button>

                                
                           
                </form>
            </div>
        </div>
    </div>
</x-layout>