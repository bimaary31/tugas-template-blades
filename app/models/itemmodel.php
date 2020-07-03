<?php

namespace App\models;
use Illuminate\Support\Facades\DB;

class itemmodel {
     public static function get_all(){
         $items= DB::Table('item')->get();
         return $items;
     }
     public static function save($data){
     $news_item = DB::table('item')->insert($data);
     return $news_item;
     }
}