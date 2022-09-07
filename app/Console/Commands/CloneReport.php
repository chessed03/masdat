<?php

namespace App\Console\Commands;

use App\Models\Report;
use Illuminate\Console\Command;

class CloneReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'runclone:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clone registers on remote table reports';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Report::runClone();

        return 0;
    }
}
