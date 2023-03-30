<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'email' => '981708394cris@gmail.com',
            'already_deposit' => true
        ]);

        Client::create([
            'email' => 'adailsonf53@gmail.com@gmail.com',
            'already_deposit' => true,
        ]);
    }
}
