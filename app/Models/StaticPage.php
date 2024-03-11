<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'title',
        'content',
        'created_at',
        'updated_at'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
