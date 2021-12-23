<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDomicilio extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'domicilio',
        'numero_exterior',
        'colonia',
        'cp',
        'ciudad'
    ];

    protected $table = "user_domicilio";

    public function users() {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    
}
