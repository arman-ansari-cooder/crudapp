<div class="table-container">
    <h2>Product List</h2>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->product }}</td>
                    <td>{{ $item->category_id }}</td> 
                    <td>
                        <button wire:click="edit({{ $item->id }})">Edit</button>
                        <button wire:click="delete({{ $item->id }})" style="color: red;">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Edit Product Form -->
@if($editMode)
    <div class="edit-form">
        <h3>Edit Product</h3>
        <form wire:submit.prevent="updateProduct">
            <input type="text" wire:model="product" placeholder="Product Name">
            
            <!-- Category Dropdown -->
            <select wire:model="category">
                <option value="">Select Category</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                @endforeach
            </select>
            
            <button type="submit">Update Product</button>
            <button type="button" wire:click="$set('editMode', false)">Cancel</button> <!-- Cancel button -->
        </form>
    </div>
@endif



