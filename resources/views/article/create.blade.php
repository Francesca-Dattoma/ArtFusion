<x-layout>
      <x-navbar />
    <div class="container-fluid vh-min-100">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form class="bg-form shadow p-5 mt-5" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Articolo</label>
                        <input type="text" name="nome" class="form-control" id="nome">
                  
                    </div>

                     <div class="mb-3">
                         <label for="prezzo" class="form-label">Prezzo (€)</label>
                         <input type="number" name="prezzo" class="form-control" id="prezzo">
                    </div>

                    <div class="mb-3">
                      <label for="descrizione" class="form-label">Descrizione</label>
                      <textarea id="descrizione" name="descrizione" class="form-control"  cols="30" rows="7"></textarea>
                    </div>
                <div class="mb-5">
                    <label for="category" class="form-label">Categoria</label>
                      <select id="category" name="category"  class="form-select">Categoria (€)</label>
                      <option value="" type="number" class="form-control" id="prezzo"></option>
                 </div>             

                
                
                
                
                    
                    
                    
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
                



            </div>
        </div>
    </div>







</x-layout>