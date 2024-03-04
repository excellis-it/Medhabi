<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramTypesCMS extends Model
{
    use HasFactory;

    protected $table = 'program_types_cms';


    public function programType()
    {
        return $this->belongsTo(ProgramType::class, 'program_type_id');
    }
}
