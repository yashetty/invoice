<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customerinvoice;
use PDF;



class customerinvoicescontroller extends Controller
{
    public function list()
    {
        $data=customerinvoice::all();
        return view('list',['customerinvoices'=>$data]);
    }

    public function viewlist(Request $request)
    {
    $customerinvoice=customerinvoice::find($request->id);
    return view('viewlist',compact('customerinvoice'));
    }

function loginsubmit()    
{
  $username = $_POST['uname'];
 $password = $_POST['psw'];

 
 if ($username =='admin' AND $password=='admin') {
    echo "You have logged in!";
} else if ($username =='croney' AND $password=='ctoney123') {
    echo "you have logged in!";
} else {
    echo "Invalid Credentials";
} 
}

function createlist(Request $req)
{
    $invoice=new customerinvoice;
    $invoice->CustomerID=$req->CustomerID;
    $invoice->InvoiceNumber=$req->InvoiceNumber;
    $invoice->CustomerName=$req->CustomerName;
    $invoice->CustomerEmail=$req->CustomerEmail;
    $invoice->CustomerAddress=$req->CustomerAddress;
  
    $invoice->InvoiceDate=$req->InvoiceDate;
    $invoice->ItemNumber=$req->ItemNumber;
    $invoice->ItemName=$req->ItemName;
    $invoice->Quantity=$req->Quantity;
    $invoice->Price= $invoice->Quantity * $req->Price;
    $invoice->TaxRate=$req->TaxRate;
    $invoice->TaxAmount=($invoice->Price * $invoice->TaxRate)/100;
    $invoice->Total = $invoice->Price + $invoice->TaxAmount;

    $invoice->save();
    return redirect('home')->with('success','Invoice Created  Successfully');
} 


    function edit($id)
{
    $data= customerinvoice::find($id);
    return view('edit',['data'=>$data]);
}

 function update(Request $req1)
 {
     $data1=customerinvoice::find($req1->id);
     $data1->CustomerID=$req1->CustomerID;
     $data1->InvoiceNumber=$req1->InvoiceNumber;
     $data1->CustomerName=$req1->CustomerName;
     $data1->CustomerEmail=$req1->CustomerEmail;
     $data1->CustomerAddress=$req1->CustomerAddress;
     $data1->InvoiceDate=$req1->InvoiceDate;
     $data1->ItemNumber=$req1->ItemNumber;
     $data1->ItemName=$req1->ItemName;
     $data1->Quantity=$req1->Quantity;
     $data1->Price=$data1->Quantity * $req1->Price;
     $data1->TaxRate=$req1->TaxRate;
     $data1->TaxAmount=($data1->Price * $data1->TaxRate)/100;
     $data1->Total = $data1->Price + $data1->TaxAmount;

     $data1->save();

     
     return redirect('list')->with('success','Records Updated  Successfully');
     

 } 

 function delete($id)
 {
     $data=customerinvoice::find($id);
     $data->delete();
     return redirect('list')->with('success','Invoice Deleted Successfully');
 }

 function pdf($id)
 {
    $customerinvoice=customerinvoice::find($id);
    return view('pdf',compact('customerinvoice'));
 }

 //function download($id)
 //{
   // $customerinvoice=customerinvoice::find($id);
     //$pdf = PDF::loadView('pdf',compact('customerinvoice'));
     //return $pdf->download('invoice.pdf');
// }

 
}