<?php
    require('./classes/Mysql.php');

    include('./config.php');

    Mysql::conect();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <?php
        require('./classes/Form.php');

        if(isset($_POST['send']) && $_POST['form'] === 'f-form') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            if ($nome === '') {
                Form::alert('erro','empty name!');
            } else if($email === '') {
                Form::alert('erro','empty email!');
            } else if($message === '') {
                Form::alert('erro','empty text!');
            } else {
                Form::register($nome, $email, $message);
                Form::alert( 'sucess', '');
            }
        }
    
    ?>


    <div id="container" class="container" container>
        <h1>90's Poetry Register<span class="reg">&reg</span></h1>
        
        <form action="" method="post" id="form" class="form" form>
            <span>Name</span>
            <input type="text" name="nome" id="nome" class="nome input" placeholder="Enter your name ..." >

            <span>Email</span>
            <input type="email" name="email" id="email" class="email input" placeholder="Enter your e-mail ...">

            <span>Text</span>
            <textarea name="message" id="message" class="message input" cols="30" rows="10" placeholder="Enter your text..."></textarea>

            <button type="submit" id="button" class="button" name="send" button>Send</button>

            <input type="hidden" name="form" value="f-form">
        </form>
    </div>
</body>
</html>