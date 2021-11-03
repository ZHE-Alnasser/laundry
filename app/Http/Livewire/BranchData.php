<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\Models\Branch;

class BranchData extends Component
{

    private $branches;
    public Branch $branch;
    public $lab = null;
    public string $message;

    protected $rules = [
        'branch.branch_id' => 'required|numeric',
        'branch.register_id' => 'required|numeric',
        'branch.lab_id' => 'nullable',
        'branch.note' => 'nullable',
    ];

    public function mount($lab = null)
    {

        $this->branch = new Branch;

        $this->lab = $lab && auth()->user()->is_admin ? Lab::find($lab) : Lab::find(auth()->user()->lab_id);
    }

    public function submit()
    {


        $this->validate();
        $this->branch->received_at = now(); // causing issue
        $this->branch->lab_id = $this->lab->id;
//        $this->branch->lab_id = $this->lab;

        $this->branch->save();
        $this->message = "Branch No. {$this->branch->branch_id} Registered Successfully";
        $this->branch = new Branch;
        $this->loadBranches();
    }

    public function loadBranches()
    {

        $this->branches = Branch::whereLabId($this->lab->id)->orderBy('received_at', 'desc')->paginate(20);
        return $this->branches;
    }




    public function render()
    {
        return view('branches.data', ['branches' => $this->loadBranches()]);
    }

}
