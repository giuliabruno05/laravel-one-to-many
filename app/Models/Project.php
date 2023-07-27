<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;

    protected $filliable = [
        'name',
        'description',
        'img',
        'start_date',
        'end_date',
        'type_id'
        
    ];
    public function type(){
        return $this -> belongsTo(Type :: class);
    }
}
