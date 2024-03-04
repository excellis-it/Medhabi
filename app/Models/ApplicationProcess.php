<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationProcess extends Model
{
    use HasFactory;

    protected $table = 'application_processes';

    protected $fillable = [
        'process_image', 
        'process_desc',
        'button_text'
        
    ];
}
