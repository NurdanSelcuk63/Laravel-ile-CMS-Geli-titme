<?php

namespace App\Classes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginClass
{
    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            $remember = $request->boolean('remember');

            if (Auth::attempt($credentials, $remember)) {
                $request->session()->regenerate();

                return response()->json([
                    'status' => true,
                    'message' => 'Giriş başarılı!',
                    'user' => [
                        'id' => Auth::id(),
                        'name' => Auth::user()->name,
                        'email' => Auth::user()->email,
                    ],
                ], 200);
            }

            return response()->json([
                'status' => false,
                'message' => 'E-posta veya şifre hatalı.',
            ], 401);
        } catch (ValidationException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Lütfen bilgileri kontrol edin.',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Bir hata oluştu: '.$th->getMessage(),
            ], 500);
        }
    }
}
