<?php

namespace App\Models;

class Buku 
{
    private static $buku = [
        [
            "judul"     =>  "One Piece",
            "slug"      =>  "one-piece",
            "butiran"   =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, cumque.",
        ],
        [
            "judul"     =>  "Naruto",
            "slug"      =>  "naruto",
            "butiran"   =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, cumque.", 
        ],    
    ];

    static function all(){
        return self::$buku;
    }
}
