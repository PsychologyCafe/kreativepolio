<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectScreenshoot extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        'id'
        //hanya id karna id biasanya otomatis dibuat oleh database, jadi tidak perlu (dan tidak boleh) diisi secara manual.
    ];
}
