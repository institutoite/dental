<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
   
    protected $guarded = [];
    public function recordatorios()
    {
        return $this->hasMany(\App\Models\Recordatorio::class);
    }

    public function getProximoRecordatorioAttribute()
    {
        return $this->recordatorios()->where('fecha', '>=', now()->toDateString())->orderBy('fecha')->first();
    }
}
