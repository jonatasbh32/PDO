<?php
session_start();
require_once 'db.php';
require_once 'valida.php';
?>



<html>
<head><title>Login</title></head>

<body>
     <div align="center">
     <div style="width:300px; border: solid 1px #006D9C; " align="left">
     <?php
     if(isset($errMsg)){
     echo '<div style="color:#FF0000;text-align:center;font-size:12px;">'.$errMsg.'</div>';
     }
     ?>
     <div style="background-color:#006D9C; color:#FFFFFF; padding:3px;"><b>Login</b></div>
     <div style="margin:30px">

         <form action="" method="post">
         <label>Login:  </label><input type="text" name="user" class="box"/><br /><br />
         <label>Senha: </label><input type="password" name="senha" class="box" /><br/><br />
         <input type="submit" name='submit' value="Submit" class='submit'/><br />
     
     </form>
     </div>
     </div>
     </div>
</body>
</html>