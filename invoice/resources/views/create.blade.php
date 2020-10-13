@extends('layout')

<div class="content" >

@section('content')

<form action="/create" method="POST" class="form" >
    @csrf
    <div class="form-group">
   <label>Enter Invoice Details</label>   
   <br> <br><br>

     <label>Customer ID</label><input type="text" name="CustomerID" ><br> <br>
     <label>Invoice Number</label> <input type="text" name="InvoiceNumber" ><br> <br>
     <label>Customer Name</label> <input type="text" name="CustomerName" ><br> <br>
     <label>Customer Email</label><input type="text" name="CustomerEmail" ><br> <br>
     <label> Customer Address</label><input type="text" name="CustomerAddress" ><br> <br>
    
     <label>Invoice Date</label><input type="text" name="InvoiceDate" ><br> <br>
     <label>Item Number</label><input type="text" name="ItemNumber" ><br> <br>
     <label>Item Name</label><input type="text" name="ItemName" ><br> <br>
     <label>Quantity</label><input type="text" name="Quantity" ><br> <br>
     <label>Price(per item)</label><input type="text" name="Price" ><br> <br>
     <label>TaxRate(%)</label><input type="text" name="TaxRate" ><br> <br>
     
     
    <button type="submit">Create</button>
   </div>

</form>
@endsection
</div>