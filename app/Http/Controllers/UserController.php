<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Support\Facades\Log;
use DB;

class UserController extends Controller
{
    
    public function getUsers(){
        try {
            $users = User::with("userdomicilio")
            ->select("*", DB::raw("TIMESTAMPDIFF(YEAR, DATE(fecha_nacimiento), current_date) AS edad"))
            ->get();
            $count =$users->count();
            
            $data = $users->toArray();

            return response()->json(
                [
                  "data"=> $data,
                  "count"=>$count
                ],200
              );
        } catch (\Exception $e) {
            Log::info('Error  '.$e->getMessage());

            return response()->json(
              [
                "Message" => "Error",
              ],400
            );
        }
    }
}
