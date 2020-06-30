<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="alert alert-success container" role="alert">
        <h4 class="alert-heading">Signed in!</h4>
        <p>Hello <?php echo $_POST["name"]; ?><p>
        <hr>
        <p class="mb-0">Your Email is  <?php echo $_POST["email"]; ?> </p>
    </div>

</body>
</html>