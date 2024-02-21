<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class ValueController extends Controller
{
    public function getValue()
    {
        $client = new Client();

        try {
            $response = $client->request('GET', 'http://127.0.0.1:8001/api/getvalues');

            $data = $response->getBody()->getContents();

            $result = json_decode($data, true);

            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
