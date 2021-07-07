<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

$router->get('/', function (Request $request) {
    return view('index');
});

$router->get('/session', function (Request $request) {
    return response()->json([
        'session.name' => $request->session()->get('name')
    ]);
});

$router->get('/login', ['as' => 'login', function (Request $request) {
    $user = $request->session()->get('user');

    if ($user) {
        return redirect()->route('admin');
    } 

    return view('login');
}]);

$router->post('/login', function (Request $request) {
    $email = $request->input('email');
    $pass = $request->input('password');

    $user = DB::table('users')->where('email', $email)->first();

    if (!$user) {
        return redirect()->route('login');
    }

    if (Hash::check($pass, $user->password)) {
        $request->session()->put('user', $user->email);
        return redirect()->route('admin');
    }

    return redirect()->route('login');
});

$router->get('/admin', [ 'as' => 'admin', function (Request $request) {
    if (!$request->session()->get('user')) {
        return redirect()->route('login');
    }

    $boxes = DB::table('boxes')->get();

    return view('admin', ['boxes' => $boxes]);
}]);

$router->post('/boxes', function (Request $request) {
    $serial_no = $request->input('serial_no');
    $address = $request->input('address');
    $location = $request->input('location');
    $contact_name = $request->input('contact_name');
    $contact_tel = $request->input('contact_tel');
    $delivered_by = $request->input('delivered_by');
    $delivered_at = $request->input('delivered_at');

    DB::table('boxes')->insert([
        'serial_no' => $serial_no,
        'address' => $address,
        'location' => $location,
        'contact_name' => $contact_name,
        'contact_tel' => $contact_tel,
        'delivered_by' => $delivered_by,
        'delivered_at' => $delivered_at,
        'created_at' => date("Y-m-d"),
        'updated_at' => date("Y-m-d"),
    ]);

    return redirect()->route('admin');
});