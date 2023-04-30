<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function toPageResponse($page)
    {
        return [
            'data' => $page->getCollection(),
            'metadata' => [
                'total' => $page->total(),
                'total_page' => ceil($page->total() / $page->perPage()),
                'size' => (int) $page->perPage(),
                'page' => $page->currentPage(),
            ]
        ];
    }
}
