<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
            margin: 020px;
        }

        post.content {
            margin-bottom: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    @if (session('success'))
        <div
            style="padding: 10px; margin-bottom: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px;">
            {{ session('success') }}
        </div>
    @endif
    <h1>{{ $post->title }}</h1>
    <p><em>Created at: {{ $post->created_at->format('M d, Y H:i') }}</em></p>
    @if($post->created_at != $post->updated_at)
        <p><em>Last updated: {{ $post->updated_at->format('M d, Y H:i') }}</em></p>
    @endif
    <div class="post-content">
        {!! nl2br(e($post->content)) !!} {{-- Display content, converting newlines to <br> --}}
    </div>
    <hr>

    <p><a href="{{ route('posts.index') }}">Back to all posts</a></p>
    <p><a href="{{ route('posts.edit', $post) }}">Edit this post</a></p>
    <form action="{{ route('posts.destroy', $post) }}" method="POST"
        onsubmit="return confirm('Are you sure you want to delete this post?');" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit"
            style="background-color: #dc3545; color: white; padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer;">Delete
            Post</button>
    </form>
</body>

</html>