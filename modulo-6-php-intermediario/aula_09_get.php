<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <form method="get">
        <input type="text" name="nome"/>
        <input type="text" name="email"/>
        <input type="submit" name="acao" value="Enviar"/>
    </form>
    <?php
        if(isset($_GET['acao'])){    
            $nome = @$_GET['nome'];
            $email = @$_GET['email'];

            echo $nome;
            echo '<br/>';
            echo $email;
        }
    ?>
</body>
</html>