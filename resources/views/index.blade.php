<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Methods</title>
</head>
<body>
    <h1>Laravel Form Methods</h1>


    <form action="form.index" method="GET">
        <input type="text" name="name" placeholder="Ismingiz">
        <input type="text" name="email" placeholder="Email">
        <button type="submit">GET Request</button>
    </form>

    <form action="form.store" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Ismingiz">
        <input type="text" name="email" placeholder="Email">
        <button type="submit">POST Request</button>
    </form>

    <form action="form.delete" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="id" placeholder="ID ni kiriting">
        <button type="submit">DELETE Request</button>
    </form>

    <form action="form.update" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Yangi ismingiz">
        <input type="text" name="email" placeholder="Yangi email">
        <button type="submit">PUT Request</button>
    </form>

    <form action="form.patch" method="POST">
        @csrf
        @method('PATCH')
        <input type="text" name="name" placeholder="Yangilangan ismingiz">
        <button type="submit">PATCH Request</button>
    </form>
</body>
</html>
