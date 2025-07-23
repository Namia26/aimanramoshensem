@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-900 text-white p-6">
    <div class="max-w-3xl mx-auto bg-gray-800 border border-gray-700 p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-6">Edit Product</h1>

        @if ($errors->any())
        <div class="mb-4 text-red-400">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold">Product Name</label>
                <input type="text" name="name" value="{{ old('name', $product->name) }}" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold">Description</label>
                <textarea name="description" rows="3" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-semibold">Price (MYR)</label>
                <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded" required>
            </div>

            <div class="mb-4">
                <label for="stock" class="block text-sm font-semibold">Stock</label>
                <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded" required>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('products.index') }}" class="text-sm text-blue-400 hover:underline">← Back to Products</a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded font-semibold text-white">Update Product</button>
            </div>
        </form>
    </div>
</div>
@endsection