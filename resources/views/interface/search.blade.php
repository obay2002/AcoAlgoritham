<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/setting.css') }}">
    <title>Ant colony engine</title>
</head>
<body>
    <header>
        <img src="{{ asset('images\download.jpg') }}" alt="My Image">
        <h1>نموذج البحث</h1>
    </header>
    <form action="{{ route('main.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="search">أدخل كلمات البحث:</label>
        <input type="text" id="search" name="search" required>
        <input type="submit" value="بحث">
    </form>
</body>
</html>
