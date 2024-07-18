<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/result.css') }}">
    <title>نتائج البحث</title>
</head>
<body>
    <header>
        {{-- <img src="{{ asset('images/Uhz9NZUhEDc7cxJcQmgj9h.jpg') }}" alt="My Image"> --}}
        <h1>نتائج البحث</h1>
    </header>
    @if($articles->isEmpty())
        <p>لم يتم العثور على نتائج.</p>
    @else
        <ul>
            @foreach ($articles as $article)
            <h1>{{ $article->title }}</h1> 
                <li>{{ $article->content }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
