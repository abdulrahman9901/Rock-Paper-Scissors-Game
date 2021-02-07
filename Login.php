<html>
    <head>
                <title>Abdulrahman Awad</title>
        <style>
              body{
            padding:5px;
            margin-top:200px;
            background:lightgray;
            display: flex;
            flex-direction:column;
            justify-content:center;
            align-items: center;
            }
            label{
                margin-left:5px;
            }
            input{
                margin: 5px;
            }
            #btn{
                margin-left:65px;
            }
        </style>
    </head>
    <body>
    <?php
    $response=" ";
     $salt = 'XyZzy12*_';
     $stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';
      if(isset($_POST['Log In'])){
         $username=$_POST['who'];
         $password=$_POST['pass'];
         if($username==false){
             $response= "you haven't entered your username";
         } else if ($password==false){
             $response= "you haven't entered your password";
         }else{
             $passcode= md5($salt . $password );
              if($passcode != $stored_hash)
              {
                  $response= "Incorrect password";
              }else{
                   $response= "Thsnk you go ahead to have fun now"; 
                   header("Location: game.php?name=".urlencode($_POST['who']));
              }
         }
                    
      }
    ?>   
        <div id="form">
        <form action='login.php' method="POST">
            <p><?= $response?></p>
            <label for='who'>Username</label><br>
            <input type='text' id='username' name="who"> <br>
            <label for="password"> Password </label><br>
            <input type="password" id="password" name="pass"><br>
            <input id="btn" type="submit" name="login" value="Log In"><br>
        </form>
        </div>
    </body>
</html>