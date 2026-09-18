<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('products.create') }}" class="inline-block border border-white text-white py-2 px-4 rounded hover">Add Product</a>
            <table class="min-w-full table-auto border-collapse mt-6">
                <thead>
                    <tr>
                        <th class= "px-4 py-2 border-b dark:border-gray-700 text-left text-white">Name</th>
                        <th class= "px-4 py-2 border-b dark:border-gray-700 text-left text-white">Color</th>
                        <th class= "px-4 py-2 border-b dark:border-gray-700 text-left text-white">Size</th>
                        <th class= "px-4 py-2 border-b dark:border-gray-700 text-left text-white" colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class= "hover:bg-gray-100 dark:hover:bg-gray-700 text-white">
                        <td class= "px-4 py-2 border-b dark:border-gray-700 text-white">{{ $product->name }}</td>
                        <td class= "px-4 py-2 border-b dark:border-gray-700 text-white">{{ $product->color->color }}</td>
                        <td class= "px-4 py-2 border-b dark:border-gray-700 text-white">{{ $product->size->size }}</td>
                        <td class= "px-4 py-2 border-b dark:border-gray-700 text-white"><a href="{{ route('products.show', $product) }}" class="inline-block border border-white text-white py-1 px-3 rounded">Show</a></td>
                        <td class= "px-4 py-2 border-b dark:border-gray-700 text-white"><a href="{{ route('products.edit', $product) }}" class="inline-block border border-white text-white py-1 px-3 rounded">Edit</a></td>
                        <td class= "px-4 py-2 border-b dark:border-gray-700 text-white">
                            <button type="button" class="inline-block border border-white text-white py-1 px-3 rounded"
                                onclick="document.getElementById('deleteModal{{ $product->id }}').showModal()">
                                Delete
                            </button>
                            @include('products.delete', ['product' => $product])
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
