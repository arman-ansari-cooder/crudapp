
<div class="form-container">
        @if (session()->has('message'))
            <div class="success">
                {{ session('message') }}
            </div>
        @endif
    <h2>Add Product</h2>
    <form wire:submit.prevent="save">
        <label for="product-name">Product Name</label>
        <input type="text" id="product-name" name="product" placeholder="Enter product name" wire:model="product">

        @error('product')
            <div class="error" style="color: red;">{{ $message }}</div>
        @enderror

        <label for="category">Category</label>
        <select id="category" name="category" wire:model="category">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
            @endforeach
        </select>

        @error('category')
            <div class="error" style="color: red;">{{ $message }}</div>
        @enderror

        <input type="submit" value="Add Product">
    </form>
</div>