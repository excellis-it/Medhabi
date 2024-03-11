<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'type',
        'status',
        'is_custom_link',
        'is_delete',
        'status',
        'created_at',
        'updated_at'
    ];

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id', 'id');
    }


}
