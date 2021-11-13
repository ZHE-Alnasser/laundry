<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryDate extends Component
{
    public $categories;
   public Category $category;
    public $type = 'users';
    public string $message;

    protected $rules = [

        'category.type' => 'required',
        'category.name' => 'required',

    ];

//    public function mount($type = null)
//    {
//
//        $this->category = new Category;
//
//        $this->type = $type ;
//    }

    public function submit()
    {
        //$this->category = new Category;

        $this->validate();

        $this->category->type= 'users';
//        $this->category->lab_id = $this->lab;

        $this->category->save();
        $this->message = "Category No. {$this->category->id} Registered Successfully";
        $this->category = new Category;
        $this->loadCategories();
    }

    public function loadCategories()
    {
        $this->categories = Category::whereType($this->category->type)->get();

//        $this->category->save();
        return $this->categories;
    }
    public function render()
    {
        return view('categories\data');
    }
}
