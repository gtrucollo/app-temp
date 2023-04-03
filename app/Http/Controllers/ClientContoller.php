<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientContoller extends Controller
{
    public function index(string $email)
    {
        $client = Client::where('email', $email)->get(['email', 'already_deposit'])->first();
        if (!isset($client)) {
            return response(['message' => 'client not found'], 404);
        }

        return $client->toJson();
    }

    public function connectPsql()
    {
        $raw = DB::connection('pgsql')->getPdo();
        dd($raw);
    }
}
