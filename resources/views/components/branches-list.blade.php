<x-select class="mx-5 w-auto" name="" id="" wire:change="setBranch($event.target.value)">
    @foreach($branches as $branch)
        <option value="{{$branch->id}}">{{$branch->name}}</option>
        @endforeach
</x-select>