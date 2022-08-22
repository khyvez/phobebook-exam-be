<?php

namespace App\Http\Controllers;

use App\Models\smsLog;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\SmsLogRepositoryInterface;

class SmsLogController extends Controller
{

    private $smsLogRepository;

    /**
     * construct.
     */
    public function __construct(SmsLogRepositoryInterface $smsLogRepository)
    {
        $this->smsLogRepository = $smsLogRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function sendSms(Request $request) {
        $this->smsLogRepository->sendSms($request->all());
        return response()->json(
            [
                'status' => 201,
                'data' => "Success"
            ]
        );
    }
}
