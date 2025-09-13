<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function reply(Request $request)
    {
        $message = $request->input('message');

        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key=" . env('GEMINI_API_KEY');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post($url, [
            'contents' => [
                [
                    'parts' => [
                        ['text' => $message]
                    ]
                ]
            ]
        ]);

        // cek isi response
        $json = $response->json();

        // ambil balasan
        $reply = $json['candidates'][0]['content']['parts'][0]['text'] ?? 'Maaf, tidak ada balasan.';

        return response()->json(['reply' => $reply]);
    }
}
