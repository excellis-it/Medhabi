<?php

 namespace App\Helpers;

use App\Models\School;

 class Helper
 {
     public static function getAllSchoolPage()
     {
         return School::orderBy('name', 'asc')->get();
     }
 }
