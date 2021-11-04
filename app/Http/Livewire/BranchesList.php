<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use App\Models\Branch;

class BranchesList extends Component
{
//    use WithPagination;
//    private $branches;
//    public Branch $branch;
//    public string $message;
//
//    protected $rules = [
//        'branch.branch_id' => 'required|numeric',
//        'branch.name' => 'required|numeric',
//        'branch.address' => 'nullable',
//        'branch.phone' => 'nullable',
//    ];

//    public function mount($lab = null)
//    {
//
//        $this->branch = new Branch;
//
//        $this->lab = $lab && auth()->user()->is_admin ? Lab::find($lab) : Lab::find(auth()->user()->lab_id);
//    }


    public function setBranch($id)
    {
        session()->put('branch',$id);

//      dd( [ 'branch_id'=> session()->get('branch')]);
}

//    public function submit()
//    {
//
//
//        $this->validate();
////        $this->branch->lab_id = $this->lab;
//
//        $this->branch->save();
//        $this->message = "Branch No. {$this->branch->branch_id} Registered Successfully";
//        $this->branch = new Branch;
//        $this->loadBranches();
//    }

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
