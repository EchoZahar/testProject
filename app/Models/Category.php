<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name','slug','parentId','published','createdBy','modifiedBy','deleted_at'
    ];

    // получение родительской категории (category main)
    public function children() {
        return $this->hasMany(self::class, 'parentId');
    }

    // полиморфные отношения с статьями (Article)
    public function articles()
    {
        return $this->morphedByMany('App\Models\Article', 'categoryable');
    }
}
