<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
            include 'Filing.php';
            $filename = 'a.txt';
            $file = new Filing();
            $file->writeFile($filename, "First writing in file");
            $file->readFile($filename);
            $file->appendFile($filename, "First appending in file");
            $file->readFile($filename);
        ?>
    </body>
</html>
