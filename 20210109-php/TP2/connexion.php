<?php
        $db = "mysql:host=localhost;dbname=news";
        $user = "root";
        $password = "";
        $dbh = new PDO($db,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
