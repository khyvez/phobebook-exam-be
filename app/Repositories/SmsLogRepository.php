<?php

namespace App\Repositories;

use App\Models\SmsLog;
use App\Repositories\Interfaces\SmsLogRepositoryInterface;

class SmsLogRepository implements SmsLogRepositoryInterface
{

    public function sendSms($request)
    {
        foreach($request as $row){
            $sms = new SmsLog();
            $sms->employee_id = $row['id'];
            $sms->save();
        }

    }
}
