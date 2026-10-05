<?php

namespace App\Controllers\Instructor;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Instruktur'
        ];
        return view('instructor/dashboard', $data);
    }
}
