<?php

namespace App\Repositories\Interfaces;
use App\Models\SmsLog;

interface SmsLogRepositoryInterface
{
    public function sendSms($request);
}
