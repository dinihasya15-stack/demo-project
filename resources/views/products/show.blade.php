<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex gap-8">
                <div>
                    <span class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</span>
                    <p class="mt-1 text-gray-900 dark:text-white">{{ $product->name }}</p>
                </div>

                <div>
                    <span class="block text-sm font-medium text-gray-700 dark:text-gray-200">Color</span>
                    <p class="mt-1 text-gray-900 dark:text-white">{{ $product->color->color }}</p>
                </div>

                <div>
                    <span class="block text-sm font-medium text-gray-700 dark:text-gray-200">Size</span>
                    <p class="mt-1 text-gray-900 dark:text-white">{{ $product->size->size }}</p>
                </div>
            </div>

            <a href="{{ route('products.index') }}"
                class="inline-block bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Back
            </a>
        </div>
    </div>
</x-app-layout>
