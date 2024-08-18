<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create staff</h2>
    <form action="/staff/update/{{ $staff->id }}" method="post">
        @csrf
        <label for="Name">
            Name:
            <input type="text" name="name" value="{{ $staff->name }}">
        </label><br><br>
        <label for="Salary">
            Salary:
            <input type="text" name="salary" value="{{ $staff->salary }}">
        </label><br><br>
        <button type="submit">Edit Staff</button>
    </form>

</body>
</html>
