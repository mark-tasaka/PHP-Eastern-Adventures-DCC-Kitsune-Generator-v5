<?php

    function getPatron($input)
    {
        $a00 = array("", "");
        $a01 = array("Radioactive Dinosaur,", "Perversion of nature that rises from the ocean");
        $a02 = array("Raijin,", "God of thunder, lightening and storms");


        $array1= array($a00, $a01, $a02);
        
        return $array1[$input];
        
    }

    



?>