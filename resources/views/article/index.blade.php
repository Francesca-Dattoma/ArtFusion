<x-layout>

    <x-navbar />

    <div class="container vh-min-100">

        <div class="row justify-content-center">

          <div class="container">
            <div class="row justify-content-end">

            </div>
            @forelse($articles as $article)

            <div class="col-12 col-md-8">

                <section class="cards-wrapper">

                    <div class="card-grid-space">
                      <a class="card" href="" style="--bg-img:{{Storage::url($article->foto)}}">
                        <div>
                          <h1>{{$article->name}}</h1>
                          <p>{{$article->descrizione}}</p>
                        </div>
                      </a>
                    </div>

                </section>

            </div>

            </div>

            @empty 

                <div class="col-12 text-center p-5">
                   <p>Qui non c'è nulla</p>
                  <a href="{{route('article.create')}}" class="btn btn-primary">Crea un articolo</a>
                </div>

            @endforelse            
            
        </div>
    </div>







</x-layout>