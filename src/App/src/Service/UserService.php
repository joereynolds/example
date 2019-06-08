<?php

namespace App\Service;

class UserService
{
    const API_URL = 'https://jsonplaceholder.typicode.com/users';

    public function get()
    {
        $profiles = [
            "profiles" => [
                [
                'image' => 'assets/male-profile.jpeg',
                'name' => 'Jim Johnson',
                'phone' => '07804235435',
                'email' => 'jimjohnson@gmail.com',
                ],
            ]
        ];

        return $profiles;
    }
}
