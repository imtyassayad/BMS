<?php

namespace App\Models;

use App\Models\chiller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ahu extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function chiller()
    {
        return $this->BelongsTo(chiller::class);
    }
}
