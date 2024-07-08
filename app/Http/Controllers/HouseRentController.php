<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HouseRentController extends Controller
{
    public function showForm()
    {
        return view('predict');
    }

    public function predictRent(Request $request)
    {
        // Girdi verilerini alın
        $input = $request->all();

        // Flask API'sine POST isteği gönderin
        $response = Http::post('http://127.0.0.1:5000/predict', $input);

        // JSON yanıtını çözümleyin
        $data = $response->json();

        // rent_prediction anahtarının olup olmadığını kontrol edin
        if (isset($data['rent_prediction'])) {
            $rentPrediction = $data['rent_prediction'];
        } 

        // Sonucu döndürün
        return view('result', ['rent_prediction' => $rentPrediction]);
    }

}
