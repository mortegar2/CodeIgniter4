<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'   => 'Bienvenido',
            'message' => 'Hola desde CodeIgniter 4 usando el motor de plantillas View Renderer.',
        ];

        return view('home', $data);
    }
}
