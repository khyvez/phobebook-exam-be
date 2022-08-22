<?php

namespace App\Observers;

use App\Models\SmsLog;
use App\Jobs\SendSmsBlast;
class SmsLogObserver
{
    /**
     * Handle the SmsLog "created" event.
     *
     * @param  \App\Models\SmsLog  $smsLog
     * @return void
     */
    public function created(SmsLog $smsLog)
    {
        SendSmsBlast::dispatch($smsLog)->delay(now()->addSeconds(10));
    }

    /**
     * Handle the SmsLog "updated" event.
     *
     * @param  \App\Models\SmsLog  $smsLog
     * @return void
     */
    public function updated(SmsLog $smsLog)
    {
        //
    }

    /**
     * Handle the SmsLog "deleted" event.
     *
     * @param  \App\Models\SmsLog  $smsLog
     * @return void
     */
    public function deleted(SmsLog $smsLog)
    {
        //
    }

    /**
     * Handle the SmsLog "restored" event.
     *
     * @param  \App\Models\SmsLog  $smsLog
     * @return void
     */
    public function restored(SmsLog $smsLog)
    {
        //
    }

    /**
     * Handle the SmsLog "force deleted" event.
     *
     * @param  \App\Models\SmsLog  $smsLog
     * @return void
     */
    public function forceDeleted(SmsLog $smsLog)
    {
        //
    }
}
