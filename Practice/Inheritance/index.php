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
            include 'Person.php';
            include 'Student.php';
            
            $person = new Person("Ali", 20);
            echo $person->intro();
            echo "<br>";
            $student = new Student("Osman", 23, "osman@pucit.edu.pk", 5);
            echo $student->intro();
        ?>
    </body>
</html>
