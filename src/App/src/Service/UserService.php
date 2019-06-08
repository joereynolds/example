<?php

namespace App\Service;

use GuzzleHttp\Client;

class UserService
{
    const API_URL = 'https://jsonplaceholder.typicode.com/users';

    public function get()
    {
        $client = new Client();
        $response = $client->get(self::API_URL);
        $profiles = json_decode($response->getBody());

        return ['profiles' => $profiles];
    }
}
