<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista_tareas extends Model
{
    use HasFactory;
    protected $table='lista_tareas';
    protected $primaryKey='id';
    protected $fillable=['descripcion','observaciones'];
    protected $guarded=[];
    public $timestamps=false;
}
