<?php




	if(isset($_POST['submit'])){
		 $errMsg = '';
		 //username and password sent from Form
		 $nome = trim($_POST['user']);
		 $senha = trim($_POST['senha']);


		if($nome == '')
			$errMsg .= 'entre com o login<br>';

		if($senha == '')
			$errMsg .= 'entre com a senha<br>';	 

		if($errMsg == ''){


    //$nome = $_POST['user'];
    //$senha = $_POST['senha'];
    $query = $conexao->prepare("Select * from usuarios Where nome='$nome' AND senha='$senha'");
    $query->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $query->execute();
    $num = $query->rowCount();
    
    if($num > 0){
        	
        header('location:home.php');
    }else{
        $errMsg .= 'Usuário e senha incorreto<br>';
    }
    }
	}

?>