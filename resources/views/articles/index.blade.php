<x-layout>

    <x-navbar />

    <div class="container vh-min-100">

        <div class="row justify-content-center">

            @forelse($articles as $article)

            <div class="col-12 col-md-8">

                <section class="cards-wrapper">

                    <div class="card-grid-space">
                      <a class="card" href="" style="--bg-img:{{Storage::url($article->foto)}}">
                        <div>
                          <h1>{{$article->nome}}</h1>
                          <p>{{$article->descrizione}}</p>
                        </div>
                      </a>
                    </div>

                </section>

            </div>

            @empty 

            <div class="col-12 text-center">

                <p>Qui non c'è nulla</p>

            </div>

            @endforelse            
            
        </div>
    </div>







</x-layout>