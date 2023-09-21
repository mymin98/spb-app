<?php

namespace App\Models;

class Buku 
{
    private static $buku = [
        [
            "judul"     =>  "Pada Suatu Hari Vol.1",
            "slug"      =>  "pada-suatu-hari-vol.1",
            "butiran"   =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, cumque.",
        ],
        [
            "judul"     =>  "Pada Suatu Hari Vol.2",
            "slug"      =>  "pada-suatu-hari-vol.2",
            "butiran"   =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, cumque.", 
        ],    
    ];

    static function all(){
        return self::$buku;
    }
}
