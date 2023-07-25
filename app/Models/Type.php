<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $filliable = [
        'timing',
        'funding',
        'kind',
        'project_id'
        
    ];
    public function project (){
        return $this -> belongsTo(Project :: class);
    }
}
