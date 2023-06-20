<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Doctrine\Inflector\Rules\English\Rules;

class CreateForm extends Component
{
    use WithFileUploads;
    public $nome;
    public $prezzo;
    public $descrizione;
    public $foto;
    public $category;

    protected $rules= [
        'nome'=> 'required',
        'category'=> 'required',
        'prezzo'=>'required| numeric',
        'descrizione'=>'required|min:10|max:300',
        'foto'=>'image|max:1024',
    ];
    public function store(){
        $this->article = Category::find($this->category)->articles()->create($this->validate());
        $this->user_id = Auth::user()->id;
        Article::create([
            'nome'=>$this->nome,
            'prezzo'=>$this->prezzo,
            'descrizione'=>$this->descrizione,
            'foto'=>$this->foto,
            'category'=>$this->category,
        ]);
        $this->cleanForm();
        
    }
    public function cleanForm(){
            $this->nome ='';
            $this->prezzo ='';
            $this->descrizione ='';
            $this->foto ='';
            $this->category='';
    }
    public function render()
    {
        return view('livewire.create-form');
    }
}
