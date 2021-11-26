<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Invoice;
use App\Models\ProductInvoice;
use PDF;

class InvoiceController extends Controller
{
    public function ViewInvoiceLists(){

        $invoices = Invoice::orderBy('created_at', 'DESC')->get();

        return view('user.invoices.list', compact('invoices'));
    }

    public function ViewCreateInvoice(){

        return view('user.invoices.create');
    }

    public function PostCreateInvoice(Request $request){
        $rules = [
            'vendor_id' => 'required',
            'invoice_number' => 'required',
            'desc' => 'required',
        ];

        $messages = [
            'vendor_id.required' => 'Please select vendor.',
            
            'invoice_number.required' => 'Please enter invoice number.',
            
            'desc.required' => 'Please enter description.',
        ];

        $this->validate($request, $rules, $messages);

        $requestData = [
            'vendor_id' => $request->vendor_id,
            'invoice_number' => $request->invoice_number,
            'desc' => $request->desc,
        ];

        $invoiceCreate = Invoice::create($requestData);

        foreach(json_decode($request->products) as $product){
            ProductInvoice::create([
                'invoice_id' => $invoiceCreate->id,
                'product_name' => $product->name,
                'qty' => $product->qty,
            ]);
        }

        return redirect()->route('user.view.invoice.lists')->with('true', 'Invoice Create Successfully.');
    }

    public function ViewEditInvoice($invoice_id){

        $invoice = Invoice::find($invoice_id);

        return view('user.invoices.edit', compact('invoice'));
    }

    public function RemoveProductQty(Request $request){

        ProductInvoice::where('id', $request->product_qty_id)->delete();

        return sendResponse('', 'Remove Product.');
    }

    public function UpdateInvoice(Request $request){
        
        $rules = [
            'vendor_id' => 'required',
            'invoice_number' => 'required',
            'desc' => 'required',
        ];

        $messages = [
            'vendor_id.required' => 'Please select vendor.',
            
            'invoice_number.required' => 'Please enter invoice number.',
            
            'desc.required' => 'Please enter description.',
        ];

        $this->validate($request, $rules, $messages);

        $requestData = [
            'vendor_id' => $request->vendor_id,
            'invoice_number' => $request->invoice_number,
            'desc' => $request->desc,
        ];

        $invoiceCreate = Invoice::where('id', $request->invoice_id)->update($requestData);

        ProductInvoice::where('invoice_id', $request->invoice_id)->delete();

        foreach(json_decode($request->products) as $product){
            ProductInvoice::create([
                'invoice_id' => $request->invoice_id,
                'product_name' => $product->name,
                'qty' => $product->qty,
            ]);
        }

        return redirect()->route('user.view.invoice.lists')->with('true', 'Invoice Update Successfully.');
    }

    public function SaveInvoice($invoice_id){
        
        $invoice = Invoice::find($invoice_id);

        $pdf = PDF::loadView('user.pdf.view', ['invoice' => $invoice]);
        $pdf->setOptions(['isPhpEnabled' => true,'isRemoteEnabled' => true]);
        $filename = time()."_invoice.pdf";
        
        // Save file to the directory
        $pdf->save('public/pdf/'.$filename);

        return redirect()->route('user.view.invoice.lists')->with('true', 'Invoice Save Successfully.');
    }

    public function DownloadInvoice($invoice_id){
        
        $invoice = Invoice::find($invoice_id);

        $pdf = PDF::loadView('user.pdf.view', ['invoice' => $invoice]);
        $pdf->setOptions(['isPhpEnabled' => true,'isRemoteEnabled' => true]);
        $filename = time()."_invoice.pdf";
        
        // Save file to the directory
        $pdf->save('public/pdf/'.$filename);

        return $pdf->download($filename);
    }

    public function SendInvoice($invoice_id){
        
        $invoice = Invoice::find($invoice_id);

        $pdf = PDF::loadView('user.pdf.view', ['invoice' => $invoice]);
        $pdf->setOptions(['isPhpEnabled' => true,'isRemoteEnabled' => true]);
        $filename = time()."_invoice.pdf";
        
        // Save file to the directory
        $pdf->save('public/pdf/'.$filename);

        $mailData = [
            'filePath' => url('public/pdf/'.$filename),
            'email' => auth()->guard('user')->user()->email,
            'fullname' => auth()->guard('user')->user()->full_name,
        ];

        \Mail::raw("Please find this attachment of PDF file.", function($message) use ($mailData){
            $message->to($mailData['email'], $mailData['fullname'])->subject('Send PDF');
            $message->from(env('MAIL_USERNAME'), 'Sarvadhi');
            $message->attach($mailData['filePath']);
        });

        return redirect()->route('user.view.invoice.lists')->with('true', 'Invoice Send Successfully.');
    }
}
