<?php
namespace App\Traits;
Trait HttpResponses{
    protected function success($data,$massage=null,$code=200){

return response()->json([
    'status'=>'Request was succesful.',
    'message'=>$massage,
    'data'=>$data,
],$code);
    }


    protected function error($data,$massage=null,$code){

        return response()->json([
            'status'=>'Request was occurred.',
            'message'=>$massage,
            'data'=>$data,
        ],$code);
            }
}