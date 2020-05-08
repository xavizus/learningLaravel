<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Company;

class HelloWorldController extends Controller
{
    public function index()
    {
        $users = User::with('company')->get();
        return view('helloworld', compact('users'));
    }
}
