
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full  flex-1">
                                <label>{{__('Expense Name')}}<span class="text-red-600"> *</span></label>
                                <div >
                                    <x-input required  name="name" value="{{$expense->name}}" class="input"/>
                                </div>
                            </div>



                            <div class="w-full sm:mx-5 flex-1">
                                <label>{{__('Category')}}<span class="text-red-600"> *</span></label>

                                <x-select name="category_id" id="category_id" class="input">
                                    @foreach($categories as $category )
                                        <option {{old('category_id',$expense->category_id)==$category->id?'selected':''}} value="{{$category->id}}">{{ $category->name }} </option>
                                    @endforeach
                                </x-select>
                            </div>

                        </div>
                <div class="flex flex-col md:flex-row mt-5">
                            <div class="w-full  flex-1">
                                <label>{{__('Amount')}}<span class="text-red-600"> *</span></label>
                                <div >
                                    <x-input type="number" required  name="amount" value="{{$expense->amount}}" class="input"/>
                                </div>
                            </div>



              <div class="w-full sm:mx-5 flex-1">
              <label>{{__('Exchange Date')}}<span class="text-red-600" > *</span></label>
              <x-input name="date" required  x-init="$nextTick(() => {new flatpickr($el,{dateFormat: 'Y-m-d'})})"
                       class="date-range input" value="{{$expense->date}}"/>
                            </div>


                </div>

                        <div class="flex  mt-8 ">
                            <button type="Submit" class="btn ">{{__('Save')}}</button>
                            <input type="button" class="btn-cancel"
                                   name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/expenses/manage')"/>
                        </div>

