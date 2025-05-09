<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'ubigeo', 'provinces_id'];

    public function province()
    {
        return $this->belongsTo(Province::class, 'provinces_id');
    }
}
