<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title','date','maxUsers','description' , 'image'];  
//     // // $filllable = rellenable con los q tenemos definidos en el controlles y solo toma esos - 
//     // opuesto $guarded, campos no podran ser asignado de manera masiva , pero con un[] vacio desabilitamos COMPLETAMENTE, osea que deje pasar los campos
//     PERO NO PASAR NUNCA EL METODO ALL en el UPDATE NI CREATE, porque se puede agregar un campo nuevo desde inspeccion
// 
}
