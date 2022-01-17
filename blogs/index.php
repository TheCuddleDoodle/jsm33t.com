<?php
$path = "date.xml";
$xmlfile = file_get_contents($path);
$new = simplexml_load_string($xmlfile);
$con = json_encode($new);
$json = json_decode($con, true);
 

foreach($json as $elem)  
{

   
    echo "<br>";
    for ($x = 0; $x  < count($elem[0]); $x++) 
    {
       if($elem[$x]['yy'] == "2021")
        {
        echo $elem[$x]['title']  ;
        echo "<br>";
        }
    }
}
  
?>