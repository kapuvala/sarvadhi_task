<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vendor;

class VendorController extends Controller
{
    public function ViewVendorLists(){

        $vendors = Vendor::orderBy('created_at', 'DESC')->get();

        return view('user.vendors.list', compact('vendors'));
    }

    public function ViewCreateVendor(){

        return view('user.vendors.create');
    }

    public function PostCreateVendor(Request $request){

        $rules = [
            'full_name' => 'required',
            'company_name' => 'required',
            'company_address' => 'required',
            'gst_number' => 'required',
            'currency' => 'required',
        ];

        $messages = [
            'full_name.required' => 'Please enter full name.',
            
            'company_name.required' => 'Please enter company name.',
            
            'company_address.required' => 'Please enter company address.',
            
            'gst_number.required' => 'Please enter company GST number.',
            
            'currency.required' => 'Please select currency.',
        ];

        $this->validate($request, $rules, $messages);

        $requestData = [
            'full_name' => $request->full_name,
            'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'gst_number' => $request->gst_number,
            'currency' => $request->currency,
        ];

        Vendor::create($requestData);

        return redirect()->route('user.view.vendor.lists')->with('true', 'Vendor Create Successfully.');
    }
}
