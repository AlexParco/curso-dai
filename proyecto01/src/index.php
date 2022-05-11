<?php 
include'./controllers/login.php';
?>
<html>
<head>
    <link rel="stylesheet" href="./styles/style.css">
    <!-- CSS only
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     -->
</head>
<body>
<div class="container">
    <div class="row w-50">
        <h3 class="pb-4">Login</h3>
        <div class="col">
            <form method="post" >
                <?php if(isset($_GET['register'])){ ?>
                <div class="mb-3">
                    <input class="form-control" type="text" name="type" placeholder="Type" value="user" disabled> 
                </div>
                <?php } ?>
                <div class="mb-3">
                    <input class="form-control" type="text" name="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input  class="form-control" type="password" name="password" placeholder="password"/> 
                </div>
                <div class="d-grid gap-2">
            <?php if(isset($_GET['register'])){ ?>
                <button class="btn btn-primary" type="submit" name="register" >Register</button>
                <a href="/">cancelar</a>
            <?php } else {?>
                <button class="btn btn-primary" onclick="location.href='?login'" type="submit" name="login">Login</button>
                <a  class="btn btn-primary" href="?register">register</a>
            <?php } ?>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
