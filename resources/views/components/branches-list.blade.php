<x-select class="mx-5 w-auto" name="branch_id" id="" wire:change="setBranch($event.target.value)">
    @foreach($branches as $branch)
        <option {{ session()->get('branch')==$branch->id?'selected':''}} value="{{$branch->id}}">{{$branch->name}}</option>
        @endforeach
</x-select>