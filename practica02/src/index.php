<form action="control.php" method="POST">
    <tr>
        <td colspan="2" align="center"
            <?php if(isset($_GET["errorusuario"])){ ?>
                bgcolor="#008000"><span>Datos incorrectos</span>
            <?php }else {?>
                bgcolor="#ccc">introduce tu clave de acceso
            <?php };?> 
        </td>
    </tr><br>
    <tr>
        <td align="right">Usuario:</td>
        <td>
            <input type="Text" name="usuario" size="8" maxlength="50">
        </td>
    </tr>
    <br>
    <tr>
        <td align="right">Clave:</td>
        <td>
            <input type="password" name="clave" size="8" maxlength="50">
        </td>
    </tr>
    <tr>
        <td>
            <input type="Submit" value="ENTRAR">
        </td>
    </tr>
</form>
