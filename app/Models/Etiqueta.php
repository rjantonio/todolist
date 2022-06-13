<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'etiqueta';

    protected $fillable = [
        'etiqueta',
        'color',
    ];

    /* public function tarea() {
        $this->belongsToMany('App\Models\Tarea.php', 'tarea_etiqueta', 'ideta', 'idtar');
    } */
    public function tareas() {
        $this->belongsToMany(Tarea::class, 'tarea_etiqueta', 'ideta', 'idtar');
    }

}
