<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recordatorio extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'fecha',
        'mensaje',
        'enviado',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
