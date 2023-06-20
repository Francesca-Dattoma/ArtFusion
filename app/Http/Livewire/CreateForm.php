<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class CreateForm extends Component
{
    use WithFileUploads;

    public $nome;
     public $category;
    public $prezzo;
    public $descrizione;
    public $foto;

    protected $rules = [
        
        'nome'=> 'required',
        'category'=> 'required',
        'prezzo'=>'required| numeric',
        'descrizione'=>'required|min:10|max:300',
        'foto'=>'image|max:1024',
    ];

    protected $messages = [
        'required'=>'Campo :attribute è obbligatorio',
        'min'=>'Campo :attribute è troppo corto',
        'max'=>'Campo :attribute è troppo lungo'
    ];

    public function store(){

        $this->validate();
        
        $this->user_id = Auth::user()->id;
        $this->article = Category::find($this->category)->articles()->create($this->validate());
        // Create a new Article instance
        // $article = new Article;

        // Fill the Article instance with the input data
        // $article->fill([
            // 'nome' => $this->nome,
            // 'descrizione' => $this->descrizione,
            // 'prezzo' => $this->prezzo,
            // 'user_id' => Auth::id(),
            // 'category_id' => $this->category,
        // ]);

        // Save the Article instance
        // $article->save();

        // Article::create([
            // 'nome'=>$this->nome,
            // 'descrizione'=>$this->descrizione,
            // 'prezzo' => $this->prezzo,
            // 'user_id' => Auth::id(),
            
        // ]);

        $this->article->save();
        session()->flash('articleCreated', 'Il tuo annuncio è stato inserito correttamente.');

        $this->cleanForm();
    }

     public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
