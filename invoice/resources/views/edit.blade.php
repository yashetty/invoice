@extends('layout')

<div class="content" >

@section('content')

<form action="/update" method="POST" class="form" >
    @csrf
    <div class="form-group">
   <label>Update Invoice Details</label>   
   <br> <br><br>

    <input type="hidden" name="id" value="{{$data['id']}}">
     <label>Customer ID</label><input type="text" name="CustomerID" value="{{$data['CustomerID']}}" ><br> <br>
     <label>Invoice Number</label> <input type="text" name="InvoiceNumber" value="{{$data['InvoiceNumber']}}" ><br> <br>
     <label>Customer Name</label> <input type="text" name="CustomerName" value="{{$data['CustomerName']}}"><br> <br>
     <label>Customer Email</label><input type="text" name="CustomerEmail" value="{{$data['CustomerEmail']}}"><br> <br>
     <label> Customer Address</label><input type="text" name="CustomerAddress" value="{{$data['CustomerAddress']}}"><br> <br>
    
     <label>Invoice Date</label><input type="text" name="InvoiceDate" value="{{$data['InvoiceDate']}}" ><br> <br>
     <label>Item Number</label><input type="text" name="ItemNumber" value="{{$data['ItemNumber']}}"><br> <br>
     <label>Item Name</label><input type="text" name="ItemName" value="{{$data['ItemName']}}"><br> <br>
     <label>Quantity</label><input type="text" name="Quantity" value="{{$data['Quantity']}}"><br> <br>
     <label>Price(Per Item)</label><input type="text" name="Price" value="{{$data['Price']}}"><br> <br>
     <label>TaxRate(%)</label><input type="text" name="TaxRate" value="{{$data['TaxRate']}}" ><br> <br>
     
     
    <button type="submit">Update</button>
   </div>

</form>
@endsection
</div>