<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendLogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jia:send-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '发送邮件';

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
     * @return mixed
     */
    public function handle()
    {
        Log::info('这里是Logs');
    }
}
