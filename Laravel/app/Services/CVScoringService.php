<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CVScoringService
{

    protected $apiURL;

    public function __construct() {
        $this->apiURL = env('PYTHON_API_URL');
    }

    public function processCv($filePath, $requirement, $jobdesk)
    {
        // Kombinasi data yang dikirim ke Python API
        $payload = [
            'requirement' => $requirement,
            'jobdesk' => $jobdesk,
        ];

        // dd($payload);

        // Kirim file dan payload ke Python API
        // $response = Http::attach(
        //     'cv',
        //     file_get_contents($filePath),
        //     basename($filePath) // Nama file
        // )->post($this->apiURL . '/process-cv', $payload);

        $response = Http::timeout(120)->attach(
            'file', // The name of the field that Flask is expecting (in Flask code: request.files['file'])
            fopen($filePath, 'r'), // Open the file and send its content
        )->post($this->apiURL . '/process-cv', $payload);
        // Pastikan respons valid
        if ($response->successful()) {
            // dd($response->json());
            return $response->json();
        } 

        if ($response->failed()) {
    // Dapatkan pesan error dari JSON response
            $errorMessage = $response->json()['error'];
            return response()->json(['error' => $errorMessage], 500);
        }

        // throw new \Exception('Gagal');
    }
}
