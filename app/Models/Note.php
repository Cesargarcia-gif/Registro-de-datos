<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "edad",
        "direccion",
        "telefono",
        "abono",
        "abonose",
        "turno",
        "codigo",
    ];

    // 🔥 Aquí generamos el codigo automáticamente
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($note) {
            $year = date('Y'); // ejemplo: 2026

            // obtener el ultimo codigo del mismo año
            $lastCode = self::where('codigo', 'like', $year . '%')
                ->orderBy('codigo', 'desc')
                ->value('codigo');

            if ($lastCode) {
                // extraer los últimos 4 dígitos
                $number = intval(substr($lastCode, 4)) + 1;
            } else {
                // si es el primero del año
                $number = 1;
            }

            // generar el formato final ej: 20260001
            $note->codigo = $year . str_pad($number, 4, '0', STR_PAD_LEFT);
        });
    }
}
