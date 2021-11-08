<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use App\Models\Branch;

class BranchesList extends Component
{


    public function setBranch($id)
    {
        session()->put('branch',$id);

//      dd( [ 'branch_id'=> session()->get('branch')]);
}



    public function loadBranches()
    {

        $this->branches = Branch::all();
        return $this->branches;
    }




    public function render()
    {
        return view('components.branches-list', ['branches' => Branch::all(['id','name'])]);
    }

}
