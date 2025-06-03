<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a New Post</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 2px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            display: block;
            margin: auto;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
</head>

<body>
    <h1>Create a New Post</h1>
    {{-- this is a comment in blade --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- method route vase chie inja?--}}
    <form action="{{ route('posts.store') }}" method="POST">
        @CSRF
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" id="content">{{ old('content') }}</textarea>
        </div>
        <button type="submit">Create Post</button>
        </div>
    </form>
    <p>
        <a href="{{ route('posts.index') }}">Back to Posts</a>
    </p>
</body>

</html>