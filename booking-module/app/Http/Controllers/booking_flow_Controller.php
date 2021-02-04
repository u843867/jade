<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booking_flow_Controller extends Controller
{
    //
    public function booking_flow(Request $request)
    {
        // dd($request->request);
        $search_parameters = ($request->all());
        // dd($request->request)['parameters'];
        return view('/booking/flow', ['search_parameters' => $search_parameters]);
    }
}
