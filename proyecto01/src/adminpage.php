<?php 
include_once'./controllers/users.php';

// si no es un admin se le regresara a la pagina principal
session_start();

if (!isset($_SESSION['admin'])){
    header('Location: /');
    exit();
}
?>

<html>
<head>
    <link rel="stylesheet" href="./styles/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="table-responsive">
        <h1 class="fs-2">Lista de usuarios</h1>
        <table class="table" style="width: 600px;">
            <thead class="table">
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Type</th>
                    <th scope='col'>Email</th>
                    <th scope='col' colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $res = $conn->query("SELECT * FROM users");
                while($row=$res->fetch_array()){ 
                ?>
                <tr>
                    <th scope='row'><?php echo $row['id']; ?></th>
                    <td ><?php echo $row['type']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td> <a class="link-info" href="?edit=<?php echo $row['id'];?>" onclick="return confirm('confirmar edicion')">editar</a> </td>
                    <td> <a class="link-danger" href="?del=<?php echo $row['id'];?>" onclick="return confirm('confirmar eliminacion')">eliminar</a> </td>
                </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    <div>
    <form method="post">
        <table width="100%" cellpadding="15" class="table_form">
            <?php if(isset($_GET['save']) || isset($_GET['edit'])) { ?>
            <tr>
                <td>
                <input class="form-control" type="text" name="type" placeholder="Type" value="<?php 
                if(isset($_GET['edit'])){
                    echo $getROW['type'];
                }
                ?>">
                </td>
            </tr>
            <tr>
                <td>
                <input class="form-control"  type="text" name="email" placeholder="Email" value="<?php 
                if(isset($_GET['edit'])){
                    echo $getROW['email'];
                }
                ?>">
                </td>
            </tr>
        <?php if(isset($_GET['save'])){ ?>
            <tr>
                <td>
                    <input class="form-control" type="password" name="password" placeholder="password"/> 
                </td>
            </tr>
        <?php }  ?>
            <?php } ?>
            <tr>
                <td>
                    <?php if (isset($_GET['edit'])){ ?>
                        <button type="submit" name="update class="btn btn-primary"">Editar</button>
                        <a href="/">Inicio</a>
                     <?php } else { ?>
                        <?php if(isset($_GET['save'])){?>
                            <button type="submit" name="save" class="btn btn-primary" >Guardar</button>
                            <a href="/adminpage.php" type="submit" name="cancelar" class="btn btn-primary" >cancelar</a>
                        <?php } else { ?>
                            <a href="?save" class="btn btn-primary">Agregar usuario</a>
                            <a href="/logout.php" class="btn btn-primary" >Cerrar Sesion</a>
                        <?php } ?>
                    <?php } ?>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
