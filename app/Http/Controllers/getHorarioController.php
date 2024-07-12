<?php

namespace App\Http\Controllers;
use App\Models\EstrategiaWms;
use App\Models\EstrategiaWmsHorarioPrioridade;
use Illuminate\Http\Request;
use DB;

class getHorarioController extends Controller
{
    
   
    public function post(Request $request){

         $validatedData = $request->validate([
            'dsEstrategia' => 'required|string',
            'nrPrioridade' => 'required|integer',
            'horarios' => 'required|array',
            'horarios.*.dsHorarioInicio' => 'required|string',
            'horarios.*.dsHorarioFinal' => 'required|string',
            'horarios.*.nrPrioridade' => 'required|integer',
        ]);

        $dsEstrategia = $validatedData['dsEstrategia'];
        $nrPrioridade = $validatedData['nrPrioridade'];
        $horarios = $validatedData['horarios'];

       $dados = new EstrategiaWms([
            'ds_estrategia_wms'=>$dsEstrategia,
            'nr_prioridade'=>$nrPrioridade,
            'dt_registro'=>now(),
        ]);
            $dados->save();
            $ultimoRegistro = EstrategiaWms::latest()->first();

            foreach($horarios as $horario){
                $dadosHora = new EstrategiaWmsHorarioPrioridade([
                    'cd_estrategia_wms'=>$ultimoRegistro->cd_estrategia_wms,
                    'ds_horario_inicio'=>$horario['dsHorarioInicio'],
                    'ds_horario_final'=>$horario['dsHorarioFinal'],
                    'nr_prioridade'=>$horario['nrPrioridade'],
                    'dt_registro'=>now(),
                    ' dt_modificado'=>now(),
                ]);
                    $dadosHora->save();
            }
        return response()->json(['message' => 'Dados Gravados com Sucesso']);
    
    }
    
    
    public function index($cdEstrategia,$dsHora,$dsMinuto,$prioridade){

        $query = "SELECT 
                    est.ds_estrategia_wms, 
                    est.nr_prioridade AS est_nr_prioridade, 
                    hor.ds_horario_inicio, 
                    hor.ds_horario_final, 
                    hor.nr_prioridade AS hor_nr_prioridade
                FROM 
                    tb_estrategia_wms AS est
                JOIN 
                    tb_estrategia_wms_horario_prioridade AS hor
                ON 
                    est.cd_estrategia_wms = hor.cd_estrategia_wms
                WHERE 
                    '$dsHora:$dsMinuto'::time BETWEEN hor.ds_horario_inicio::time
                     AND hor.ds_horario_final::time
                     AND hor.cd_estrategia_wms = '$cdEstrategia'
                     AND hor.nr_prioridade = '$prioridade'
                     ;
                ";
                 $results = DB::select($query);

                 if(!$results){
                    return response()->json('Horário Padrão');
                 }
       return response()->json($results);
    }
}
