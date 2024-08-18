<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create Staff</h2>
    <form action="/staff/create" method="post">
        @csrf
        <label for="Name">
            Name:
            <input type="text" name="name">
        </label><br><br>
        <label for="Salary">
            Salary:
            <input type="text" name="salary">
        </label><br><br>
        <button type="submit">Create Staff</button>
    </form>
</body>
</html>