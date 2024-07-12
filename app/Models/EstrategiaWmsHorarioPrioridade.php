<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstrategiaWmsHorarioPrioridade extends Model
{
    use HasFactory;
   // Define o nome da tabela associada a este modelo
   protected $table = 'tb_estrategia_wms_horario_prioridade';

   // Define o nome da chave primária
   protected $primaryKey = 'cd_estrategia_wms_horario_prioridade';

   // Define que a chave primária é um inteiro e é auto-incrementável
   public $incrementing = true;
   protected $keyType = 'int';

   // Se você não usar timestamps, defina como false
   public $timestamps = false;

   // Defina os atributos que podem ser preenchidos em massa
   protected $fillable = [
       'cd_estrategia_wms',
       'ds_horario_inicio',
       'ds_horario_final',
       'nr_prioridade',
       'dt_registro',
       'dt_modificado',
   ];
}
