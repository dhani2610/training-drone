<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SitemapService;

class GenerateSitemapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate {--base-url= : Optional base URL for the sitemap}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate public/sitemap.xml for trainingdrone.my.id';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating sitemap.xml for Training Drone Indonesia...');

        $baseUrl = $this->option('base-url') ?: 'https://trainingdrone.my.id';
        $result = SitemapService::generate($baseUrl);

        $this->info("Successfully generated sitemap!");
        $this->info("Total URLs : {$result['total_urls']}");
        $this->info("File Path  : {$result['file_path']}");
        $this->info("File Size  : " . round($result['file_size'] / 1024, 2) . " KB");
        $this->info("Base URL   : {$result['base_url']}");

        return Command::SUCCESS;
    }
}
