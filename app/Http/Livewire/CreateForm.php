<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateForm extends Component
{
    use WithFileUploads;

    public $category;
    public $nome;
    public $prezzo;
    public $descrizione;
    public $foto;

    protected $rules = [
        'category'=> 'required',
        'nome'=> 'required',
        'prezzo'=>'required| numeric',
        'descrizione'=>'required|min:10|max:300',
        'foto'=>'image|max:1024',
    ];

    protected $messages = [
        'required'=>'Campo obbligatorio',
        'min'=>'Campo troppo corto',
        'max'=>'Campo troppo lungo'
    ];

    public function store(){

        $this->validate();
        
        $this->user_id = Auth::user()->id;
        $this->article = Category::find($this->category)->articles()->create($this->validate());
        // Create a new Article instance
        $article = new Article;

        // Fill the Article instance with the input data
        $article->fill([
            'nome' => $this->nome,
            'descrizione' => $this->descrizione,
            'prezzo' => $this->prezzo,
            'user_id' => Auth::id(),
            'category_id' => $this->category,
        ]);

        // Save the Article instance
        $article->save();
    }


    public function render()
    {
        return view('livewire.create-form');
    }
}
