<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\SmsLog;

class SendSmsBlast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $smsLog;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($smsLog)
    {
        $this->smsLog = $smsLog;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('Sms Job Handled');
        // Send sms here
        $sms = SmsLog::findOrFail($smsLog->id);
        $sms->sent_at = \Carbon\Carbon::now();
        $sms->status = true;
        $sms->save();

    }
}
