<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// =====================================================
// AUTH ROUTES
// =====================================================
$routes->group('auth', static function ($routes) {
    $routes->get('login', 'Auth\Login::index');
    $routes->post('login', 'Auth\Login::process');
    $routes->get('logout', 'Auth\Login::logout');
});

// Alias routes
$routes->get('masuk', 'Auth\Login::index');
$routes->post('masuk', 'Auth\Login::process');
$routes->get('keluar', 'Auth\Login::logout');

// Block common registration URLs
$routes->get('daftar', 'Auth\Register::index');
$routes->post('daftar', 'Auth\Register::process');
$routes->get('register', 'Auth\Register::index');
$routes->post('register', 'Auth\Register::process');

// =====================================================
// INSTRUCTOR ROUTES
// =====================================================
$routes->group('instruktur', ['namespace' => 'App\Controllers\Instructor'], static function ($routes) {
    $routes->get('/', 'Dashboard::index');
    
    // Manajemen Kursus
    $routes->get('kursus', 'CourseController::index');
    $routes->get('kursus/buat', 'CourseController::create');
});

$routes->get('maintenance', function() {
    $db = \Config\Database::connect();
    $settings = $db->table('platform_settings')->get()->getRow();
    if (!$settings || !$settings->is_suspended) {
        return redirect()->to('/');
    }
    return view('maintenance');
});

// === PREVIEW ROUTES (bisa dihapus setelah review) ===
$routes->get('preview/403', function() { return view('errors/html/error_403'); });
$routes->get('preview/500', function() { return view('errors/html/production'); });
// ===================================================
