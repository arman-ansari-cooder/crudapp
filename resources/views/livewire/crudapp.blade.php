<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 0.875rem;
            margin-top: 5px;
        }
        .success {
            color: green;
            font-size: 1rem;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        @if (session()->has('message'))
            <div class="success">
                {{ session('message') }}
            </div>
        @endif
        <form wire:submit.prevent="submit">
            <label for="category">Category</label>
            <input wire:model="category" type="text" id="category">
            @error('category') 
                <div class="error">{{ $message }}</div> 
            @enderror
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
