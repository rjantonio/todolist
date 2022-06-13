<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'tarea';

    protected $fillable = [
        'titulo',
        'texto',
        'fecha',
    ];

    public function muchosauno() {
        return $this->belongsTo('App\Models\Usuario.php', 'idtar', 'idusu');
    }

    /* public function etiqueta() {
        $this->belongsToMany('App\Models\Etiqueta.php', 'tarea_etiqueta', 'idtar', 'idetq');
    } */
    public function etiquetas() {
        $this->belongsToMany(Etiqueta::class, 'tarea_etiqueta', 'idtar', 'idetq');
    }

}
