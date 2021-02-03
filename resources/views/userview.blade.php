<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="Usercontroller" method="POST">
        <input type="text" name="user">
        @csrf
        <br><br>
        <input type="text" name="email">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>