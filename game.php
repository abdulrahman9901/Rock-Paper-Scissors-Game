<html>
    <head>
        <style>
              body{
              margin-top: 200px;
             padding: 10px;
            background:lightgray;
            display: flex;
            flex-direction:column;
            justify-content:center;
            align-items: center;
            }
           
            input{
                margin: 5px;
            }
            #btn{
                margin-left:65px;
            }
            textArea{
                display:block;
                width:240px;
                height:70px;
            }
        </style>
    </head>
<body>
<?php
function check($strategy){
   $options=array("rock","paper","scissors");
   $index=rand(0,2);
   $result=array();
   $ComuterStratehgy=$options[$index];
   if($ComuterStratehgy === $strategy)
       $result[0]='tie';
   elseif($ComuterStratehgy ==='rock'){
    if($strategy === 'paper')
            $result[0]="win";
    else 
            $result[0]="lost";    
  } elseif($ComuterStratehgy ==='paper'){
    if($strategy === 'scissors')
            $result[0]="win";
    else 
            $result[0]="lost";    
  } elseif($ComuterStratehgy ==='scissors'){
    if($strategy === 'rock')
            $result[0]="win";
    else 
            $result[0]="lost";    
  }
  $result[1]=$ComuterStratehgy;
  return $result ;
 }
$dialoge='choose strategy then click play to start the game ';
if(isset($_GET['Play'])){
    if(!isset($_GET['strategy'])){
        $dialoge='please select a strategy';
    } else {
      $strategy=$_GET['strategy'];
      $result= check($strategy);  
      $str=$result[0];
      $com=$result[1];
      $dialoge= 'your strategy = '. $strategy . ' and computer strategy = ' .$com.' result = '. $str ;
 }
        
}elseif (isset($_GET['logout'])) {
header("Location:index.php");       
}else {    
if($_GET['name']==false || strlen($_GET['name'])<1 ){
    die("Name parameter missing");
}else{
    echo 'Welcome : '.$_GET['name'];
}
}
?>
    <form action="game.php" method="GET">
 <label for="strategy">Select hand postion</label>
 <select id="strategy" name="strategy">
<option value="empty" selected disabled>Select</option>
<option value="rock">Rock</option>
<option value="paper">Paper</option>
<option value="scissors">Scissors</option>
</select
<input type="button" name="logout" value="logout">
<input type="button" name="Play" value="Play">
<textarea><?= $dialoge ?></textarea>
    </form>
</body>
</html>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

