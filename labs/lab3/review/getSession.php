<?php

    session_start(); //starts or resumes an existing session

?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <h1>
            My name is <?= $_SESSION[] ?>
        </h1>

    </body>
</html>