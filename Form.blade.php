<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="{{route('submit.form')}}" method="post">
        @csrf
        <h3>Student Form</h3>
        Name: <input type="text" name="name1" required><br>
        Email: <input type="email" name="email1"required><br>
        <button type="submit">Submit</button>
    

    </form>
</body>
</html>