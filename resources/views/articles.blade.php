<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Laravel Site - Articles</title>
</head>
<body>
    <x-header />

    @foreach ($articles as $article)
        <article class="article">
            <h2 class="secondary-header pb-2">{{ $article['title'] }}<span class="article__author">by {{ $article['author'] }}</span></h2>
            <p class="article__body">{{ $article['body'] }}</p>
            <div class="article__date">{{ $article['created_at']->format('m/d/Y')}}</div>
        </article>
    @endforeach

    {{ $articles->links('components.paginator') }}

</body>
</html>