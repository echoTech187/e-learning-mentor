<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class SuspendFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Don't intercept the maintenance page itself
        $path = $request->getUri()->getPath();
        if (strpos($path, "maintenance") !== false || strpos($path, "preview/") !== false) {
            return;
        }

        try {
            $db = \Config\Database::connect();
            $settings = $db->table("platform_settings")->get()->getRow();
            if ($settings && $settings->is_suspended) {
                return redirect()->to("/maintenance");
            }
        } catch (\Exception $e) {
            // Database might not be available, skip
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
