<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Storage;

class WriteFile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
	}
	
	public function tags() 
	{
		return ['Job escrever arquivos em batch'];
	}

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        for ($i=0; $i < 10; $i++) {
            sleep(5);
            $filename = 'queue'.$i.'.txt';
            Storage::put($filename, 'Queue laravel');
        }
    }
}
