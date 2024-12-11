<div class="flex items-center justify-center min-h-screen bg-gray-900 p-4">
    <div class="w-full max-w-4xl bg-gray-800 p-10 rounded-lg shadow-lg text-white">
        <h2 class="text-2xl font-semibold leading-tight text-gray-200 text-center mb-8">
            {{ __('Create Food') }}
        </h2>

        <form wire:submit.prevent="createFood" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-300">Name</label>
                <input type="text" wire:model="name" id="name" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-4 text-white">
                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-300">Description</label>
                <textarea wire:model="description" id="description" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-4 text-white"></textarea>
                @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-300">Price</label>
                <input type="number" wire:model="price" id="price" class="mt-1 block w-full bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-4 text-white">
                @error('price') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mt-8 text-center">
                <button type="submit" class="px-8 py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Create Food
                </button>
            </div>
        </form>

        @if (session()->has('message'))
            <div class="mt-6 p-4 text-green-700 bg-green-200 rounded text-center">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
