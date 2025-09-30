<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Your BMI Result</h1>
    <p><strong>BMI:</strong>{{ number_format($bmi,2) }}</p>
    <p><strong>Status:</strong>{{ $result }}</p>
    <img src="{{ asset('images/'.$image) }}" alt="{{ $result }} width="250">
    <a href="/bmi">Calculate Again</a>
</body>
</html>