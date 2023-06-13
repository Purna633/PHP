<?php 
$name1=array("a"=>"ram","b"=>"hari");
$name2=array("c"=>"sita","d"=>"gita");
$name=array_merge_recursive($name1,$name2);
print_r ($name);
echo "<br>";
 ?>