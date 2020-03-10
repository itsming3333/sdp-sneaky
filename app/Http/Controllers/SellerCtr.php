<?php

namespace App\Http\SellerCtr;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class SellerCtr extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
