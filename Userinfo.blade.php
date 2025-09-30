<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Body Mass Index</title>
</head>
<body>
    <form action="{{ route('calculate') }}" method="post">
        @csrf
        <label for="Weight">Weight in Kilograms</label>
        <input type="number" name="weight"required> <br>
        <label for="height">Height in Centimeters</label>
        <input type="text" name="height" required> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>