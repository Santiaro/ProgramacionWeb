<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentTypeController extends Controller
{
    public function showAll(){
        return Person::all();
    }

    public function show($id){
        return Person::find($id)->first();
    }

    public function insert(Request $request){
        $res = [
            'ok' => true,
            'message' => ''
        ];

        try{
            Person::create($request->all());
        }catch(QueryException $e){
            $info = $e->errorInfo;

            switch($info[1]){
                case 1062:
                    $res['message'] = 'Datos duplicados';
                    break;
                default:
                    $res['message'] = 'Error al insertar';
                    break;
            }

            $res['ok'] = false;    
        }
        
        return $res;
    }

    public function update(Request $request, $id){
        $res = [
            'ok' => true,
            'message' => ''
        ];

        try{
            Person::find($id)->update($request->all());
        }catch(QueryException $e){
            $res['ok'] = false; 
            $res['message'] = 'Error al actualizar';   
        }

        return $res;
    }

    public function delete($id){
        $res = [
            'ok' => true,
            'message' => ''
        ];

        try{
            Person::find($id)->delete();
        }catch(QueryException $e){
            $res['ok'] = false; 
            $res['message'] = 'Error al borrar';   
        }

        return $res;
    }
}
