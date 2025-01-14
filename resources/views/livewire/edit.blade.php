<div class="container">
    <h2>Edit Product</h2>

    @if(session()->has('message'))
        <div class="alert alert-success" style="margin-bottom: 20px; padding: 10px; background-color: #d4edda; border: 1px solid #c3e6cb; color: #155724; border-radius: 4px;">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="update" method="POST">
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" id="product_name" wire:model="product_name" class="form-control" value="{{ $product->product }}" required>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select id="category" wire:model="category_id" class="form-control">
                <option value="" selected disabled>Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>
                        {{ $category->category }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group" style="margin-top: 20px;">
            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
</div>
