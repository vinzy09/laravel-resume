<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DetailController extends Controller
{
    public function indexs()
    {
        $details = DB::table('details')->where('id', 1)->first();
          return view(
            'welcome',
            [
                'details' => $details
            ]
        );
    }
}
