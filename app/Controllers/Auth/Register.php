<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

/**
 * Register controller - DISABLED.
 * Pendaftaran mentor hanya bisa dilakukan secara offline di kantor.
 * Semua akses ke halaman ini akan dialihkan ke halaman login.
 */
class Register extends BaseController
{
    public function index()
    {
        return redirect()->to('/auth/login')
            ->with('error', 'Pendaftaran akun mentor hanya dapat dilakukan secara offline di kantor kami. Silakan hubungi admin untuk informasi lebih lanjut.');
    }

    public function process()
    {
        return redirect()->to('/auth/login')
            ->with('error', 'Pendaftaran tidak diizinkan melalui portal ini.');
    }
}

