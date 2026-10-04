<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Testimonial extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $timestamps = false;
    protected $primaryKey = 'recid';
    protected $table = 'testimonial';
    protected $fillable = ['name','title','company','description'];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}