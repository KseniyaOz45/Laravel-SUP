<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 5; $i++) {

            $response = Http::withOptions([
                'verify' => 'C:\OSPanel\domains\laravel-sup\SUP\database\seeders\cacert.pem',
            ])->get('https://randomuser.me/api/');

            if ($response->failed()) {
                Log::error('API request failed', ['response' => $response->body()]);
            } else {
                $data = $response->json();

                $user = $data['results'][0];

                User::create([
                    "name" => $user['name']['first'] . " " . $user['name']['last'],
                    "email" => $user['email'],
                    "password" => bcrypt(Str::random(12)),
                    "avatar" => $user['picture']['large'],
                    "salary" => rand(20000 * 100, 100000 * 100) / 100
                ]);
            }
        }
        //

    }
}
