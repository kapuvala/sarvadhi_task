<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vendor;
use App\Models\Product;
use App\Models\Invoice;

class DashboardController extends Controller
{
    public function ViewDashboard(){

        $vendorCount = Vendor::count();
        $productCount = Product::count();
        $invoiceCount = Invoice::count();

        return view('user.dashboard', compact('vendorCount', 'productCount', 'invoiceCount'));
    }
}
