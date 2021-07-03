<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="text/css"
href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h2>Create Account</h2>
        <form action="user.php" method = "post">
            <div class ="form-group">
                <input type="text" name="firstname" placeholder="firstname" required /><br></br>
            </div>

            <div class ="form-group">
                <input type="text" name="lastname" placeholder="lastname" required /><br></br>
            </div>

            <div class ="form-group">
                <input type="text" name="email" placeholder="email" required /><br></br>
            </div>

            <div class ="form-group">
                <input type="password" name="password" placeholder="Password" required /><br></br>
            </div>
            <input name ="register" type ="submit" class ="btn btn-primary" value ="create account">

        </form>
    </div>
    </div>
</div>

</body>
</html>