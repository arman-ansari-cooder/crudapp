<div class="table-container" style="width: 80%; margin: 20px auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
    <h2 style="text-align: center; margin-bottom: 20px;">Product List</h2>

    @if(session()->has('message'))
        <div class="alert alert-success" style="margin-bottom: 20px; padding: 10px; background-color: #d4edda; border: 1px solid #c3e6cb; color: #155724; border-radius: 4px;">
            {{ session('message') }}
        </div>
    @endif

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: #fff;">
        <thead>
            <tr style="background-color: #343a40; color: white;">
                <th style="padding: 10px; text-align: center;">S.N</th>
                <th style="padding: 10px; text-align: left;">Product Name</th>
                <th style="padding: 10px; text-align: left;">Category</th>
                <th style="padding: 10px; text-align: center;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $item)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 10px; text-align: center;">{{ $loop->iteration }}</td>
                    <td style="padding: 10px; text-align: left;">{{ $item->product }}</td>
                    <td style="padding: 10px; text-align: left;">
                        @foreach($Category as $item2)
                            @if($item->category_id == $item2->id)
                                {{ $item2->category }}
                            @endif
                        @endforeach
                    </td>
                    <td style="padding: 10px; text-align: center;">
                        <button wire:click="edit({{ $item->id }})" style="padding: 6px 12px; margin-right: 5px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Edit</button>
                        <button wire:click="delete({{ $item->id }})" style="padding: 6px 12px; background-color: #dc3545; color: white; border: none; border-radius: 4px; cursor: pointer;">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
