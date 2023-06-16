<?php

namespace App\Http\Livewire;

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
    }


    public function render()
    {
        return view('livewire.create-form');
    }
}
