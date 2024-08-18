<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>List Staff</h2>
    <a href="/staff/create">Create new Staff</a> <hr>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Salary</td>
            <td>Action</td>
        </tr>
        @foreach($staff as $staff)
            <tr>
                <td>{{ $staff->id }}</td>
                <td>{{ $staff->name }}</td>
                <td>{{ $staff->salary }}</td>
                <td>
                    <a href="/staff/update/{{ $staff->id }}">Update</a> <br> 
                    <a href="/staff/delete/{{ $staff->id }}">Delete</a>
                <td>
            </tr>
        @endforeach

    </table>

</body>
</html>
