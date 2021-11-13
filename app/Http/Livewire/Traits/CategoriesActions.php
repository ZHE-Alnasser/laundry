<?php

namespace App\Http\Livewire\Traits;

//needs to be used as part of DataTrait.php

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

trait CategoriesActions
{
    public $categories = [];
    public $category;
    public $table='users';
    public $isCategoryModalOpen = false;


    public function openCategories()
    {

        $this->category = new Category;

        $this->isCategoryModalOpen = true;
    }

    public function manageCategories()
    {

        $data = ['category' => $this->category, 'categories' => $this->categories];
        return $data;
    }

    public function editCategory($category)
    {
//        dd($category);
        $this->category = Category::find($category);
    }

    public function saveCategory()
    {
        $name = $this->category->name;
        $table = $this->table;
        $action = $this->category->id ? 'updated' : 'created';

        $uniqueRule = Rule::unique('categories', 'categories.name')
            ->where(function ($query) use ($name, $table) {
                return $query->where('name', $name)->where('type', $table);
            });

        if ($this->category->id) {
            $uniqueRule->ignore($this->category->id);
        }

        $this->validate(['category.name' => ['required', $uniqueRule]]);

        $this->category->type = $table;
        $this->category->save();



        $this->categories = categories($this->table, true);
        $this->category = new Category;
        $this->categoryCover = null;

        $this->notify($name, $action);
    }

    public function deleteCategory($record)
    {
        $record = Category::findOrFail($record);
        $name = $record->name;
        $record->delete();
        $this->categories = categories($this->table, true);
        $this->notify($name, 'deleted');
    }


}
