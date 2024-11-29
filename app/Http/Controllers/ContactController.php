<?php

namespace App\Http\Controllers;

use App\Models\CustomerMessage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function receiveMessage(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
                'last_name'  => 'required|string|max:255',
                'email'      => 'required|email|max:255',
                'message'    => 'required|string|min:10|max:1000',
            ], [
                'first_name.required' => 'Lütfen adınızı girin.',
                'last_name.required'  => 'Lütfen soyadınızı girin.',
                'email.required'      => 'Lütfen geçerli bir e-posta adresi girin.',
                'email.email'         => 'E-posta formatı geçersiz.',
                'message.required'    => 'Lütfen mesajınızı yazın.',
                'message.min'         => 'Mesajınız en az 10 karakter uzunluğunda olmalıdır.',
                'message.max'         => 'Mesajınız 1000 karakteri geçemez.',
            ]);
    
            if ($validator->fails()) {
                throw new Exception("Validation Error!");
            }
            DB::transaction(function() use ($request){
                CustomerMessage::create([
                    "name" => $request->get('first_name'),
                    "surname" => $request->get('last_name'),
                    "email" => $request->get('email'),
                    "message" => $request->get('message'),
                ]);
            });
            return redirect('/#bize-ulasin');
        } catch (\Throwable $th) {
            Log::error("Kullanıcı mesajı alma işleminde hata oluştu! Hata mesajı: ".$th->getMessage());    
            Log::error("işleme alınan mesaj içeriği: ".json_encode($request->all()));
            return redirect('/');        
        }
    }
}
