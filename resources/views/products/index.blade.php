@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-900 text-white p-6">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">🛒 Product List</h1>
            <a href="{{ route('products.create') }}" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded font-semibold">+ Add Product</a>
        </div>

        @if (session('success'))
        <div class="mb-4 text-green-400">
            ✅ {{ session('success') }}
        </div>
        @endif

        <div class="overflow-x-auto bg-gray-800 border border-gray-700 rounded shadow">
            <table class="w-full table-auto">
                <thead class="bg-gray-700 text-left text-sm uppercase">
                    <tr>
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Price</th>
                        <th class="px-4 py-3">Stock</th>
                        <th class="px-4 py-3">Added</th>
                        <th class="px-4 py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                    <tr class="border-t border-gray-700 hover:bg-gray-700">
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3">{{ $product->name }}</td>
                        <td class="px-4 py-3">RM {{ number_format($product->price, 2) }}</td>
                        <td class="px-4 py-3">{{ $product->stock }}</td>
                        <td class="px-4 py-3 text-sm text-gray-400">{{ $product->created_at->diffForHumans() }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('products.edit', $product) }}" class="text-blue-400 hover:underline mr-4">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-400 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-4 py-4 text-center text-gray-500">No products yet.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection