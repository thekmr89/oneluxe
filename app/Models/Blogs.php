<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $timestamps = false;
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = ['title','meta_keywords','meta_description','description','images','inputStatus','tags'];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
