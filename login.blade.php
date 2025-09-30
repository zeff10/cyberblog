<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Login</title> 
</head> 
<body> 
    <h2>Login</h2> 
    <form action="/login" method="POST"> 
        @csrf  
        <label>Enter your name:</label> 
        <input type="text" name="name" required> 
        <button type="submit">Login</button> 
</form> 
</body> 
</html> 
