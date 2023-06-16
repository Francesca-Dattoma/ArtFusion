<div>
     <form class="form1" wire:submit.prevent="store">
        @csrf

        <label class="label2" for="nome">Nome</label>
        <input class="input2" type="text" name="nome" id="nome" wire:model="nome">
        <label class="label2" for="category">Categoria</label>
        <select class="input2" type="text" name="nome" id="nome" wire:model="category">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->nome}}</option>
            @endforeach
        </select>

        <label class="label2" for="prezzo">Prezzo</label>
        <input class="input2" type="number" name="prezzo" id="prezzo" wire:model="prezzo">
             
        <label class="label2" for="descrizione">Descrizione</label>
        <textarea class="input2" name="descrizione" id="descrizione" wire:model="descrizione"></textarea>
             
        <label class="label2" for="foto">Immagine</label>
        <input class="input2" type="file" name="foto" id="foto">
        <div class="d-flex justify-content-center">
            <a href="" class="button2 poiret">Carica</a>
        </div>
    </form>
</div>