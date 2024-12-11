<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Edit Food') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Back to Food List -->
                    <div class="mb-4">
                        <a href="{{ route('nigabyte.index') }}" 
                           class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-600 border border-transparent rounded-lg shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 dark:bg-gray-500 dark:hover:bg-gray-400 dark:focus:ring-gray-400">
                           Back to Food List
                        </a>
                    </div>

                    <!-- Edit Food Form -->
                    <form wire:submit.prevent="editFood">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-neutral-200">
                                    Name
                                </label>
                                <input type="text" id="name" wire:model="name" 
                                       class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-neutral-600 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 dark:bg-neutral-800 dark:text-neutral-200" />
                                @error('name') 
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-neutral-200">
                                    Description
                                </label>
                                <textarea id="description" wire:model="description" rows="3" 
                                          class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-neutral-600 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 dark:bg-neutral-800 dark:text-neutral-200"></textarea>
                                @error('description') 
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Price -->
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700 dark:text-neutral-200">
                                    Price
                                </label>
                                <input type="number" id="price" wire:model="price" 
                                       class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-neutral-600 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 dark:bg-neutral-800 dark:text-neutral-200" />
                                @error('price') 
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6">
                            <button type="submit" 
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 dark:bg-green-500 dark:hover:bg-green-400 dark:focus:ring-green-400">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
