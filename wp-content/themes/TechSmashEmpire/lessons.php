<?php
$names=array('Moses','Kimende','John','Jane');
function myFirstFunctin($name, $petName){
    echo '<p>My name is ' , $name,'and my favorite pet is ',$petName, '</p>';
}

myFirstFunctin("Moses","Dog");
myFirstFunctin("Kimende","Cat");

?>
<h1><?php bloginfo('name')?> </h1>
<p><?php bloginfo("description")?> </p>



<h1>
    <?php 
    $count=0;
    while ($count <count($names)) {
        echo '<li>',$names[$count],'</li>';
        $count++;
    }
    
    // echo($names)
    
    
    ?> 
    
</h1>

