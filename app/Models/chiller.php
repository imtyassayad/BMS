<?php

namespace App\Models;

use App\Models\ahu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class chiller extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function ahu()
    {
        return $this->hasMany(ahu::class);
    }


}
