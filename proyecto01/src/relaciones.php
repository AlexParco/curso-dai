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
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php
            $res = $conn->query("SELECT * FROM products WHERE tipo='importado'");
            while($row=$res->fetch_array()){ 
            ?>
            <tr>
                <td><?php echo $row['pais']; ?> </td>
                <td><?php echo $row['producto']; ?></td>
                <td><?php echo $row['cantidad']; ?></td>
            </tr>
            <?php
            }
            ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center " style="height: 100vh">
    <div class="row justify-content-center">
        <div class="table-responsive mb-5 w-100">
            <h1 class="fs-4">Exportados</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Pais</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = $conn->query("SELECT * FROM products WHERE tipo='exportado'");
                    while($row=$res->fetch_array()){ 
                    ?>
                    <tr>
                        <td><button style="border: none;" type="button" class="btn link-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <?php echo $row['pais']; ?> 
                        </button></td>
                        <td><?php echo $row['producto']; ?></td>
                        <td><?php echo $row['cantidad']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="table-responsive w-100">
            <h1 class="fs-4">Importados</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Pais</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = $conn->query("SELECT * FROM products WHERE tipo='importado'");
                    while($row=$res->fetch_array()){ 
                    ?>
                    <tr>
                        <td><button style="border: none;" type="button" class="btn link-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <?php echo $row['pais']; ?> 
                        </button></td>
                        <td><?php echo $row['producto']; ?></td>
                        <td><?php echo $row['cantidad']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
