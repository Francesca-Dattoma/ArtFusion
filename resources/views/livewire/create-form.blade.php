<div>
    {{-- The whole world belongs to you. --}}

    <form class="form1" wire:submit.prevent="store">
       @csrf
    
       @if (session()->has('articleCreated'))
           <div class="alert alert-success text-center">
               {{ session('articleCreated') }}
           </div>
       @endif
    
       <label class="label2" for="nome">Nome</label>
       <input type="text" id="nome" wire:model="nome" class="input2 @error('nome') is-invalid @enderror">
           @error('nome')
           {{$message}}
           @enderror
    
       <label class="label2" for="category">Categoria</label>
       <select type="text" id="nome" wire:model.defer="category" class="input2">
           <option value="">Seleziona categoria</option>
           @foreach($categories as $category)
           <option value="{{$category->id}}">{{$category->name}}</option>
           @endforeach
       </select>
    
       <label class="label2" for="prezzo">Prezzo</label>
       <input type="number" id="prezzo" wire:model="prezzo"  class="input2 @error('prezzo') is-invalid @enderror" >
           @error('prezzo')
               {{$message}}
           @enderror
    
       <label class="label2" for="descrizione">Descrizione</label>
       <textarea class="input2" id="descrizione" wire:model="descrizione" class="input2 @error('descrizione') is-invalid @enderror"></textarea>
           @error('descrizione')
               {{$message}}
           @enderror
    
       <label class="label2" for="foto">Immagine</label>
       <input type="file" id="foto" wire:model='foto' class="input2 @error('foto') is-invalid @enderror">
             @error('foto')
               {{$message}}
            @enderror
       <button type="submit" class="button2 d-flex justify-content-center">
           <a href="" class=" poiret">Inserisci</a>
       </button>
    </form>
</div>

