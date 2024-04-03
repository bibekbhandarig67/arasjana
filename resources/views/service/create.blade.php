<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Services</title>
</head>
<body>
    <h1>Create Services</h1>
    <form action="{{ route('service.create') }}" method="post">
        @csrf
        <div>
            <label for="name">Name: </label>
            <input name="name" id="name" type="text">
        </div>
        <div>
            <button type="submit">Add Service</button>
        </div>
    </form>
</body>
</html>