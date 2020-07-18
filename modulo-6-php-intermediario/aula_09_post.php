<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <form method="post">
        <input type="text" name="valor1"/>
        <input type="text" name="valor2"/>
        <input type="submit" name="acao" value="Enviar"/>
    </form>
    <?php
        if(isset($_POST['acao'])){    
            echo $_POST['valor1'] + $_POST['valor2'];
        }
    ?>
</body>
</html>