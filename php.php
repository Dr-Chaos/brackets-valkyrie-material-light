<?php

if(isset($_POST['username']) AND isset($_POST['password']) AND 
   $_POST['username'] == 'Valkyrie') AND $_POST['password'] == 'theme'{

    $pseudo = $_POST['username'];
    echo 'welcome ' . $pseudo ;

    $pseudo_md5 = md5($md5);
    $regex = preg_replace('#[^0-9]#', '', $pseudo_md5); 
    $array_regex = str_split($regex);

    foreach($array_regex as $resultat){
        echo $resultat;

    }

}else{

    $x = mt_rand(0, 5);
    $opposer = array(5, 4, 3, 2, 1, 0);
    echo $x . 'vaut' . $opposer[$x];

}