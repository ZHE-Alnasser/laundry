<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoriesData extends Component
{
    public $categories;
    public Category $category;
    public $name,$selected_id;
    public string $message;
    public $updateMode=false;

//
    public function mount()
    {

//        $this->category = new Category;

        $this->type = last(request()->segments()); //Get last part of current URL

        return Category::query()->whereType($this->type);


    }
//
    public function render()
    {
//        return view('livewire.categories-data');
        return view('livewire.categories-data',['categories' => $this->loadCategories()]);
    }
//
    public function loadCategories()
    {


        $this->categories = Category::whereType($this->type)->get();

        return $this->categories;
    }
//
//
    public function submit(){
//        dd('here>');
        $this->validate([
            'name' => 'required',

        ]);
        Category::create([
            'name'=>$this->name,
            'type'=>$this->type
        ]);
        $this->message = "Category Registered Successfully";
    }
//
    public function edit($id)
    {
        $record = Category::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required',

        ]);
        if ($this->selected_id) {
            $record = Category::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'type'=>$this->type

            ]);
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Category::where('id', $id);
            $record->delete();

        }
//        $this->loadCategories();
    }
}
