<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="/posts">
            {{ csrf_field() }}

            <p>
                <textarea name="body"></textarea>
            </p>

            <p>
                <button type="submit">Add Post</button>
            </p>
        </form>

        @if (count($errors))
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
    </div>
</body>
</html>
