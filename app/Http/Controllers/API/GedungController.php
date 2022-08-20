<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\Models\Gedung;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;

class GedungController extends Controller
{
    public function index(Request $request) {
       try {
        $gedung = Gedung::all();
        return ResponseFormatter::success($gedung);
       }catch(Exception $e) {
        return ResponseFormatter::error(
            ['message' => 'Something went wrong',],
        );
       } 
    }
}
