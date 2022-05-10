<?php 
include_once'crud.php';
?>
<html>
<head>
    <title>Biblioteca Virtual CRUD</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<center>
    <br>
    <div class="container">
        <form method="post">
            <table width="%70" cellpadding="15" class="table_form">
                <tr>
                    <td>
                    <input type="text" name="titulo" placeholder="Titulo" value="<?php 
                    if(isset($_GET['edit'])){
                        echo $getROW['titulo'];
                    }
                    ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="text" name="autor" placeholder="Autor" value="<?php 
                    if(isset($_GET['edit'])){
                        echo $getROW['autor'];
                    }
                    ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="text" name="url" placeholder="Url" value="<?php 
                    if(isset($_GET['edit'])){
                        echo $getROW['url'];
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
                            <button type="submit" name="save" >Agregar</button>
                            <?php
                         }
                         ?>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <div>
            <table width="100%" cellpadding="15" align="center" class="table_items">
            <?php
            $res = $conn->query("select * from books");
            while($row=$res->fetch_array()){ 
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['autor']; ?></td>
                <td><a href="<?php echo $row['url']; ?>" >url</a></td>
                <td> <a href="?edit=<?php echo $row['id'];?>" onclick="return confirm('confirmar edicion')">editar</a> </td>
                <td> <a href="?del=<?php echo $row['id'];?>" onclick="return confirm('confirmar eliminacion')">eliminar</a> </td>
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
