<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my blog posts</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
        }

        .post {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .post h2 {
            margin-top: 0;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .post-title {
            font-size: 24px;
            font-weight: bold;
        }

        .post-content {
            font-size: 16px;
            line-height: 1.5;
        }

        .post-date {
            font-size: 14px;
            color: #666;
        }

        .post-author {
            font-size: 14px;
            color: #666;
        } */
    </style>
</head>

<body>
    <h1>All Blog Posts</h1>
    {{-- Display success message --}}
    @if (session('success'))
        <div
            style="padding: 10px; margin-bottom: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px;">
            {{ session('success') }}
        </div>
    @endif
    @if ($posts->count())
        @foreach ($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p class="post-content">{{ $post->content }}</p>
                <a href="{{ route('posts.show', $post) }}">Read more...</a>
            </div>
        @endforeach
    @else
        <p>No posts found yet. Come back later!</p>
    @endif

</body>

</html>