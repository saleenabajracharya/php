<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
    <h1> User Input </h1>
    <form action = "form.php" method = "post">
    <div class = "form-group">
    <label for = "name" > Name:</label>
    <input type = "text" id="name" name="username" placeholder = "Enter name" class = "form-control">
    </div>
    <div class = "form-group">
    <label for = "email" > Email:</label>
    <input type = "text" id="email" name="email" placeholder = "Enter email" class = "form-control">
    </div>
    <input type="submit" value="Submit" class = "btn btn-primary">
    </form>
    </div>
</body>
</html>