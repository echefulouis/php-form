<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form page</title>
</head>
<body>
    <div class="container">
        <h2 class="mt-5"> Fill The form </h2>
        <form action="site2.php" method="post">

            <div class="form-group">
                <label for="exampleInputPassword1">Name: </label>
                <input class="form-control" type="text" placeholder="Enter your name" name="name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address: </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email"> 
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>
