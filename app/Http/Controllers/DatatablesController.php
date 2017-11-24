<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Datatables;


class DatatablesController extends Controller
{


public function __construct()
    {
        
        //$this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);
        $this->middleware('auth');
    }
    /**
 * Displays datatables front end view
 *
 * @return \Illuminate\View\View
 */
public function getIndex(Request $request)
{
   $request->user()->authorizeRoles(['manager']);
	//echo "hi"; exit;

    return view('datatables.index');
}

/**
 * Process datatables ajax request.
 *
 * @return \Illuminate\Http\JsonResponse
 */
public function anyData(Request $request)
{
	$request->user()->authorizeRoles(['manager']);
	
    return Datatables::of(User::query())->make(true);
}


}
