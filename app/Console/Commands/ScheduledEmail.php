<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ScheduledEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hour:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia um email com um determinado periodo';

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
        \Mail::to('ademilsonssilva1@gmail.com')->send(new \App\Mail\userMarkdown());

        $this->info('Enviado com sucesso!');
    }
}
