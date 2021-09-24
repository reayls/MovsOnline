<?php
    function lower($str) {
        $titl  =  str_replace(' ', '-', $str);
        return strtolower($titl);
    }
    function upper($str) {
        $titl  =  str_replace(' ', '-', $str);
        return strtolower($titl);
    }
    function genero($gen){
        $fgen =  explode(" ", $gen);
        return $fgen[0];
    }
