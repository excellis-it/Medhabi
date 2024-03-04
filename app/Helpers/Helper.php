<?php

 namespace App\Helpers;

use App\Models\ProgramTypesCMS;
use App\Models\School;

 class Helper
 {
     public static function getAllSchoolPage()
     {
         return School::orderBy('name', 'asc')->get();
     }

     public static function getPrograms()
     {
         return ProgramTypesCMS::orderBy('name', 'asc')->get();
     }
 }
