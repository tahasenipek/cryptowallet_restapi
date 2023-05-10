<?php

namespace App\Http\Controllers\API;

use App\Models\Teklif;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class TeklifController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'il' => 'required',
            'ilce' => 'required',
            'bina-islem' => 'required',
            'bina-durumu' => 'required',
            'oylama-orani' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 401);
        }


        try {
            $teklif = new Teklif([
                'il' => $request->input('il'),
                'ilce' => $request->input('ilce'),
                'bina_islem' => $request->input('bina-islem'),
                'bina_durumu' => $request->input('bina-durumu'),
                'oylama_orani' => $request->input('oylama-orani'),
                'firma_id' => $request->session()->get('firma_id'),
            ]);
            $teklif->save();

            return redirect()->route('firmagirisekrani');
        }
        catch (\Exception $e) {
            return response()->json([
                'message' => 'Teklif gönderme işlemi sırasında bir hata oluştu',
                'error' => $e->getMessage()
            ], 401);
        }
        /* $teklif = new Teklif()
        
        $teklif->firma_id = $request->session()->get('firma_id');
        $teklif->il = $validatedData['il'];
        $teklif->ilce = $validatedData['ilce'];
        $teklif->bina_islem = $validatedData['bina-islem'];
        $teklif->bina_durumu = $validatedData['bina-durumu'];
        $teklif->oylama_orani = $validatedData['oylama-orani'];
        $teklif->save(); */

        return redirect()->route('/firma/girisekrani')->with('success', 'Teklifiniz başarıyla gönderildi.');
    }
}