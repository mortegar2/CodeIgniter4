<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'   => 'Bienvenido',
            'message' => 'Hola desde CodeIgniter 4 usando el motor de plantillas View Renderer.',
            'date'    => date('d/m/Y H:i:s'),
        ];

        return view('home', $data);
    }
}
