<html>
    <head>
        <style>
            html{
                text-align:center;
                padding: 100px;
            }
        </style>
    </head>
<?php
$names=array("rock","paper","scissors");
function check($strategy,$ComuterStratehgy){
   
   
   if($ComuterStratehgy === $strategy)
       $result='tie';
   elseif($ComuterStratehgy ==='rock'){
    if($strategy === 'paper')
            $result="win";
    else 
            $result="lost";    
  } elseif($ComuterStratehgy ==='paper'){
    if($strategy === 'scissors')
            $result="win";
    else 
            $result="lost";    
  } elseif($ComuterStratehgy ==='scissors'){
    if($strategy === 'rock')
            $result="win";
    else 
            $result="lost";    
  }
  return $result ;
 }
 $options=array("rock","paper","scissors");
     for($c=0;$c<3;$c++) {

         for($h=0;$h<3;$h++) {

             $r = check($names[$c], $names[$h]);
             print '<pre>';
             print "Human=$names[$h] Computer=$names[$c] Result= $r \n";
             print "</pre>";

         }

}
?>
</html>