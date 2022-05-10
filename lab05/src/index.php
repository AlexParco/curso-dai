<?php 
include_once 'crud.php';
?> 

<!Doctype html>
<html>
<head>
    <title>Ejemplo CRUD</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<center>
    <br>
    <br>
    <div id="form">
        <form method="post">
            <table width="100%" border="1" cellpadding="15">
                <tr>
                    <td>
                    <input type="text" name="fn" placeholder="Nombre" value="<?php 
                    if(isset($_GET['edit'])){
                        echo $getROW['fn'];
                    }
                    ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="text" name="ln" placeholder="Apellido" value="<?php 
                    if(isset($_GET['edit'])){
                        echo $getROW['ln'];
                    }
                    ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                         if (isset($_GET['edit'])){
                             ?>
                            <button type="submit" name="update">Editar</button>
                            <?php
                         }else {
                             ?>
                            <button type="submit" name="save" >Registrar</button>
                            <?php
                         }
                         ?>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <div>
            <table width="100%" border="1" cellpadding="15" align="center">
            <?php
            $res = $sqlcon->query("SELECT * FROM data");
            while($row=$res->fetch_array()){ 
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fn']; ?></td>
                <td><?php echo $row['ln']; ?></td>
                <td> <a href="?edit=<?php echo $row['id'];?>" onclick="return confirm('Confirmar edicion')">editar</a> </td>
                <td> <a href="?del=<?php echo $row['id'];?>" onclick="return confirm('Confirmar eliminacion')">eliminar</a> </td>
            </tr>
            <?php
            }
            ?>
            </table>
        </div>
    </div>
</center>
</body>
</html>
