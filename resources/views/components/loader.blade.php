{{--<label wire:click="$emit('modalOpen')"  for="file-upload" class= "btn">--}}


                            {{--<span>--}}
                                   {{--<svg   wire:loading class="animate-spin inline h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"--}}
                                         {{--fill="none" viewBox="0 0 24 24">--}}
                                {{--<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>--}}
                                {{--<path class="opacity-75" fill="currentColor"--}}
                                      {{--d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>--}}
                            {{--</svg>--}}

{{--<i data-feather="image" class="ml-1"></i>--}}
    {{--{{__('Upload image')}}--}}
{{--</span>--}}

    {{--<input  wire:loading.attr="disabled" class="hidden" id="file-upload"  name="image" type="file"/>--}}
{{--</label>--}}

{{--</div>--}}

{{--<button class="btn mt-4 float-left" >--}}

    {{--<span>--}}
            {{--{{__('Save')}}--}}
        {{--</span>--}}
{{--</button>--}}
<div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter Name</label>
        <input name="name" type="text" wire:model="name" class="form-control input-sm"  placeholder="Name">
    </div>
    {{--<div class="form-group">--}}
    {{--<label>Enter Email</label>--}}
    {{--<input type="text" class="form-control input-sm" placeholder="Enter type" wire:model="type">--}}
    {{--</div>--}}
    <button type="button" wire:click="submit()" class="btn btn-primary">Submit</button>
</div>
