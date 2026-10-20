<?php

namespace App\Http\Controllers;

use App\Services\SitemapService;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Return sitemap.xml directly with XML header
     */
    public function index(): Response
    {
        $filePath = public_path('sitemap.xml');

        if (!file_exists($filePath)) {
            SitemapService::generate();
        }

        $content = file_get_contents($filePath);

        return response($content, 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
        ]);
    }
}
