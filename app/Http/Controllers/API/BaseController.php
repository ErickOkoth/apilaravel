<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class BaseController extends Controller
{
    //
    public function sendResponse($result,$message){
        /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

        $response=[
            'success'=>true,
            'data'=>$result,
            'message'=>$message
        ];

        return response()->json($response,200);

    }
        /**

     * return error response.

     *

     * @return \Illuminate\Http\Response

     */
    public function sendError($error,$errormessages=[],$code=404){
        $response=[
            'success'=>false,
            'message'=>$error
        ];
        if(!empty($errormessages)){
            $response['data']=$errormessages;

        }
        return response()->json($response,$code);

    }
}
