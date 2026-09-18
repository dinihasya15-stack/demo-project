<dialog id="deleteModal{{ $product->id }}" 
    class="rounded-lg shadow-xl max-w-xs w-full mx-2 p-0 border-0 backdrop:bg-black/50 dark:bg-gray-800">
   
    <div class="bg-white dark:bg-gray-800 rounded-lg">
        <!-- Modal Header -->
        <div class="flex justify-between items-center p-4 border-b dark:border-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Confirm Delete</h3>
            <button type="button"
                class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300"
                onclick="document.getElementById('deleteModal{{ $product->id }}').close()">
                &times;
            </button>
        </div>

        <!-- Modal Body -->
        <div class="p-4 text-center text-gray-700 dark:text-gray-300">
            Are you sure you want to delete this product : {{ $product->name }}?
        </div>

        <!-- Modal Footer -->
        <div class="flex justify-end p-4 border-t dark:border-gray-700 space-x-2">
            <button type="button"
                class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-md dark:text-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600"
                onclick="document.getElementById('deleteModal{{ $product->id }}').close()">
                Cancel
            </button>
            {{-- trigger delete action --}}
            <form action="{{ route('products.destroy', $product) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="px-4 py-2 text-sm font-medium text-white bg-red-600 hover:bg-red-700 rounded-md">
                    Delete
                </button>
            </form>
        </div>
    </div>
</dialog>
