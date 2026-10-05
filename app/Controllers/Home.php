<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Redirect root to login page if not logged in, otherwise to instructor dashboard
        if (session()->get('is_logged_in')) {
            return redirect()->to('/instruktur');
        }
        return redirect()->to('/auth/login');
    }
}
