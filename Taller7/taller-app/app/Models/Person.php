<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'email',        
        'username',  
        'password',  
        'residence_place',
        'document',  
        'phone',
        'birthdate',
        'document_type_id'
    ];

    //Relación n-1 con cities
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    //Relación n-1 con documenttype
    public function documenttype()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
