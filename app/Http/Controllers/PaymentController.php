<?php

namespace App\Http\Controllers;

use App\Application;
use function compact;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Application $application)
    {
        return view('payment.create', compact('application'));
    }
}
