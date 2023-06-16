<x-layout>
    

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 ">
                {{-- <div class="background">
                    <div class="shape"></div>
                    <div class="shape"></div>
                </div> --}}
                <form class="form1">
                    @csrf
            
                    <label class="label2" for="nome">Nome</label>
                    <input class="input2" type="text" name="nome" placeholder="Email or Phone" id="nome">
            
                    <label class="label2" for="prezzo">Prezzo</label>
                    <input class="input2" type="number" name="prezzo" placeholder="Password" id="prezzo">
                    
                    <label class="label2" for="descrizione">Descrizione</label>
                    <input class="input2" type="te" name="descrizione" placeholder="Password" id="descrizione">
                    
                    <label class="label2" for="foto">Immagine</label>
                    <input class="input2" type="file" name="foto" placeholder="Password" id="foto">
                    <div class="d-flex justify-content-center">
                        <a href="" class="button2 poiret">Carica</a>

                    </div>
                    
                    
                </form>
            </div>
        </div>
                
                



    </div>
    <x-navbar />






</x-layout>