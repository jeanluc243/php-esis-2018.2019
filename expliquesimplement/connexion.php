<?php

     if ($_SERVER['REQUEST_METHOD'] =='POST') {
        $db = new PDO('mysql:host=localhost;dbname=expliquesimplement','root','');
        $pseudo = strip_tags(trim($_POST['pseudo']));
        $pwd = strip_tags(trim($_POST['pwd']));
        $query = $db->query("SELECT * FROM user);
        while($data = $query->fetch()){
            if($data['pseudo'] == $pseudo AND $data['pwd'] == $pwd){
                echo 'connecte!';
            }
        }

     }
