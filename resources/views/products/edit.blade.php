<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('products.update', $product) }}" method="POST">
                @csrf 
                @method('PUT')
                <div class="mb-4">
                    <label for="inputName" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                    <input type="text" id="inputName" name="name" value="{{ $product->name }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-gray-900 dark:bg-gray-800 dark:text-white focus:border-indigo-500 focus:ring-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="inputColor" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Color</label>
                    <select
                        name ="color"
                        id="inputColor"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-gray-900 dark:bg-gray-800 dark:text-white focus:border-indigo-500 focus:ring-indigo-500"
                    >
                    @foreach($colors as $color)
                        <option value="{{ $color->id }}" {{ $product->color_id == $color->id ? 'selected' : '' }}>{{ $color->color }}</option>
                    @endforeach
                    </select>
                </div>


                <div class="mb-4">
                    <label for="inputqty" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Size</label>
                    <select
                        name ="size"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-gray-900 dark:bg-gray-800 dark:text-white focus:border-indigo-500 focus:ring-indigo-500"
                        >
                        @foreach($sizes as $size)
                            <option value="{{ $size->id }}" {{ $product->size_id == $size->id ? 'selected' : '' }}>{{ $size->size}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit"
                    class="inline-block bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Create Product      
                </button>
            </form>
        </div>
    </div>
</x-app-layout>

    