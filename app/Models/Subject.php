<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function absences() {
        return $this->hasMany(Absence::class);
    }
    
}
