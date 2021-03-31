<?php
header('Location: /main/');

if(isset($_POST['submit'])){
$Name = ($_POST['code-select']).$_POST['comment']."
";
$Pass = "".$_POST['title']."
";
$file = fopen("posts/" . 'Uploaded-'.date('l-jS-F-Y-h-i-s-A').'.html',"a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($file);
}
?>