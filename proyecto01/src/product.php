<?php
include_once'./controllers/products.php';

// si no es un usuario se le regresara a la pagina principal
session_start();

if (!isset($_SESSION['user'])){
    header('Location: /');
    exit();
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
$res = $conn->query("SELECT * FROM product WHERE id"$_GET['producto']);
while($row=$res->fetch_array()){ 
?>
<tr>
    <th scope='row'><?php echo $row['id']; ?></th>
    <td ><?php echo $row['tipo']; ?></td>
    <td><?php echo $row['producto']; ?></td>
    <td><?php echo $row['pais']; ?></td>
</tr>
<?php
}
?>
</body>
