<div class="form-container">
    @if (session()->has('message'))
        <div class="success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="save">
        <label for="category">Category</label>
        <input wire:model="category" type="text" id="category">
        @error('category')
            <div class="error">{{ $message }}</div>
        @enderror
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>