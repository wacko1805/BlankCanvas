<html>
      <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="../style.css">
      </head>
      <body>
            <header>
                  <h1>Blank<span>Canvas</span> Mainpage</h1>
                  <p><a href="/">Upload code here!</a></p>
            </header>
<?php
$path='../posts/';
function scan_dir($dir) {

    $files = array();    
    foreach (scandir($dir) as $file) {
        $files[$file] = filemtime($dir . '/' . $file);
    }

    arsort($files);
    $files = array_keys($files);

    return ($files) ? $files : false;
}
$files=scan_dir($path);


foreach ($files as $key => $value) {
    if($value!="." && $value!="..")
    {
       
        print_r (file_get_contents($path."/" .$value));
        echo "</style></script></style></script></html></html>";
    }
}
?>  