<?php

namespace App\Console\Commands;

use App\Imports\DataImport;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Excel;

class FeedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feed:content {content}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'feed menu';

    protected string $fileName = "data.xlsx";

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function handle(Excel $excel)
    {
        $content = $this->argument('content');
        $filePath = public_path($this->fileName);
        if (!Str::contains($content, ['menus', 'items'])) {
            $this->components->error('items or menus ?');
            return 0;
        }
        try {
            $excel->import(new DataImport($content), $filePath);
            $this->components->info($content.' fed.');
            return 0;
        } catch (\Exception $exception) {
            $this->components->error('Oops maybe sheets schema is wrong or file not found.');
            return $exception->getCode();
        }
    }
}
