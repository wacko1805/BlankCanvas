<?php
header('Location: /main/');

if(isset($_POST['submit'])){
$Name = "".$_POST['comment']."
";
$Pass = "".$_POST['title']."
";
$file = fopen("posts/" . 'blog-post'.date('m-d-Y_hia').'.txt',"a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($file);
}
?>