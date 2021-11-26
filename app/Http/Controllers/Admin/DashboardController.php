<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Invoice;

class DashboardController extends Controller
{
    public function ViewDashboard(){

        $userCount = User::count();
        $invoiceCount = Invoice::count();

        return view('admin.dashboard', compact('userCount', 'invoiceCount'));
    }
}
