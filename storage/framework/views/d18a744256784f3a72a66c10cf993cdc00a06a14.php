
<div dir="<?php echo e(isRTL()?'rtl':'ltr'); ?>"  >
    <?php if($beforeTableSlot): ?>
        <div class="mt-8">
            <?php echo $__env->make($beforeTableSlot, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php endif; ?>
    <div class="relative">
        <div class="flex justify-between items-center mb-1">
            <div class="flex-grow h-10 flex items-center">
                <?php if($this->searchableColumns()->count()): ?>
                <div class="w-96 flex rounded-lg shadow-sm">
                    <div class="relative flex-grow focus-within:z-10">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 mx-2 text-gray-400" viewBox="0 0 20 20" stroke="currentColor" fill="none">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <p><input wire:model.debounce.500ms="search" class="border-2 form-input block bg-gray-50 focus:bg-white w-full rounded-md pl-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5 py-2 px-8" placeholder="<?php echo e(__('Search')); ?>" /></p>
                        
                        <div class="mx-2 absolute inset-y-0 right-0 pr-3 flex items-center">
                            <button wire:click="$set('search', null)" class="text-gray-300 hover:text-red-600 focus:outline-none">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'icons::x-circle','data' => ['class' => 'h-5 w-5 stroke-current']]); ?>
<?php $component->withName('icons.x-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'h-5 w-5 stroke-current']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="flex items-center space-x-1">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'icons::cog','data' => ['wire:loading' => true,'class' => 'h-9 w-9 animate-spin text-gray-400']]); ?>
<?php $component->withName('icons.cog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:loading' => true,'class' => 'h-9 w-9 animate-spin text-gray-400']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                <?php if($exportable): ?>
                <div x-data="{ init() {
                    window.livewire.on('startDownload', link => window.open(link,'_blank'))
                } }" x-init="init">
                    <button wire:click="export" class="flex items-center space-x-2 px-3 border border-green-400 rounded-md bg-white text-green-500 text-xs leading-4 font-medium uppercase tracking-wider hover:bg-green-200 focus:outline-none"><span><?php echo e(__('Export')); ?></span>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'icons::excel','data' => ['class' => 'm-2']]); ?>
<?php $component->withName('icons.excel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'm-2']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?></button>
                </div>
                <?php endif; ?>

                <?php if($hideable === 'select'): ?>
                <?php echo $__env->make('datatables::hide-column-multiselect', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        </div>

        <?php if($hideable === 'buttons'): ?>
        <div class="p-2 grid grid-cols-8 gap-2">
            <?php $__currentLoopData = $this->columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <button wire:click.prefetch="toggle('<?php echo e($index); ?>')" class="px-3 py-2 rounded text-white text-xs focus:outline-none
            <?php echo e($column['hidden'] ? 'bg-blue-100 hover:bg-blue-300 text-blue-600' : 'bg-blue-500 hover:bg-blue-800'); ?>">
                <?php echo e($column['label']); ?>

            </button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>

        <div class="rounded-lg shadow-lg bg-white max-w-screen overflow-x-scroll">
            <div class="rounded-lg <?php if (! ($this->hidePagination)): ?> rounded-b-none <?php endif; ?>">
                <div class="table align-middle min-w-full">
                    <?php if (! ($this->hideHeader)): ?>
                    <div class="table-row divide-x divide-gray-200">
                        <?php $__currentLoopData = $this->columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($hideable === 'inline'): ?>
                                <?php echo $__env->make('datatables::header-inline-hide', ['column' => $column, 'sort' => $sort], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php elseif($column['type'] === 'checkbox'): ?>
                            <div class="w-32 py-4 flex justify-center overflow-hidden align-top px-6 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider focus:outline-none">
                                <div class="px-3 py-1 rounded <?php if(count($selected)): ?> bg-orange-400 <?php else: ?> bg-gray-200 <?php endif; ?> text-white text-center">
                                    <?php echo e(count($selected)); ?>

                                </div>
                            </div>
                            <?php else: ?>
                                <?php echo $__env->make('datatables::header-no-hide', ['column' => $column, 'sort' => $sort], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="table-row divide-x divide-blue-200 bg-blue-100">
                        <?php $__currentLoopData = $this->columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($column['hidden']): ?>
                                <?php if($hideable === 'inline'): ?>
                                    <div class="table-cell w-5 overflow-hidden align-top bg-blue-100"></div>
                                <?php endif; ?>
                            <?php elseif($column['type'] === 'checkbox'): ?>
                                <div class="overflow-hidden align-top bg-blue-100 px-6 py-5 border-b border-gray-200 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider flex h-full flex-col items-center space-y-2 focus:outline-none">
                                    <div>SELECT ALL</div>
                                    <div>
                                        <input type="checkbox" wire:click="toggleSelectAll" <?php if(count($selected) === $this->results->total()): ?> checked <?php endif; ?> class="form-checkbox mt-1 h-4 w-4 text-blue-600 transition duration-150 ease-in-out" />
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="table-cell overflow-hidden align-top">
                                    <?php if(isset($column['filterable'])): ?>
                                        <?php if( is_iterable($column['filterable']) ): ?>
                                            <div wire:key="<?php echo e($index); ?>">
                                                <?php echo $__env->make('datatables::filters.select', ['index' => $index, 'name' => $column['label'], 'options' => $column['filterable']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                        <?php else: ?>
                                            <div wire:key="<?php echo e($index); ?>">
                                                <?php echo $__env->make('datatables::filters.' . ($column['filterView'] ?? $column['type']), ['index' => $index, 'name' => $column['label']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                    <?php $__empty_1 = true; $__currentLoopData = $this->results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="table-row p-1 divide-x divide-gray-100 <?php echo e(isset($result->checkbox_attribute) && in_array($result->checkbox_attribute, $selected) ? 'bg-orange-100' : ($loop->even ? 'bg-gray-100' : 'bg-gray-50')); ?>">
                            <?php $__currentLoopData = $this->columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($column['hidden']): ?>
                                    <?php if($hideable === 'inline'): ?>
                                    <div class="table-cell w-5 overflow-hidden align-top"></div>
                                    <?php endif; ?>
                                <?php elseif($column['type'] === 'checkbox'): ?>
                                    <?php echo $__env->make('datatables::checkbox', ['value' => $result->checkbox_attribute], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php else: ?>
                                    
                                    <div class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-900 table-cell text-center"  >
                                        <?php echo $result->{$column['name']}; ?>

                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="p-3 text-lg text-teal-600">
                            <?php echo e(__("There's Nothing to show at the moment")); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php if (! ($this->hidePagination)): ?>
            <div class="rounded-lg rounded-t-none max-w-screen border-b border-gray-200 bg-white">
                <div class="p-2 sm:flex items-center justify-between">
                    
                    <?php if(count($this->results)): ?>
                        <div class="my-2 sm:my-0 flex items-center">
                            <select name="perPage" class="mt-1 form-select block w-full  pr-10 pl-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" wire:model="perPage">
                                <?php $__currentLoopData = config('livewire-datatables.per_page_options', [ 10, 25, 50, 100 ]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $per_page_option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($per_page_option); ?>"><?php echo e($per_page_option); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <option value="99999999"><?php echo e(__('All')); ?></option>
                            </select>
                        </div>

                        <div class="my-4 sm:my-0">
                            <div class="lg:hidden">
                                <span class="space-x-2"><?php echo e($this->results->links('datatables::tailwind-simple-pagination')); ?></span>
                            </div>

                            <div class="hidden lg:flex justify-center">
                                <span><?php echo e($this->results->links('datatables::tailwind-pagination')); ?></span>
                            </div>
                        </div>

                        <div class="flex justify-end text-gray-600">
                           <p> <?php echo e(__('Results')); ?> <?php echo e($this->results->firstItem()); ?> - <?php echo e($this->results->lastItem()); ?> <?php echo e(__('of')); ?>

                            <?php echo e($this->results->total()); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if($afterTableSlot): ?>
    <div class="mt-8">
        <?php echo $__env->make($afterTableSlot, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\laundry\resources\views/livewire/datatables/datatable.blade.php ENDPATH**/ ?>