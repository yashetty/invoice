@extends('layout')


<div class="content" >

@section('content')


<table id="example" class="display" cellspacing="0" >
<thead>
<tr>
    <td>Customer ID</td> 
    <td>Invoice Number</td>
    <td>Customer Name</td>
    <td>Customer Email</td>
    <td>Customer Address</td>
    <td>Invoice Date</td>
    <td>Item Number</td>
    <td>Item Name</td>
    <td>Quantity</td>
    <td>Price</td>
    <td>Tax Rate(%)</td>
    <td>Tax Amount</td>
    <td>Total</td>
</tr>
</thead>


<tr>
    <td>{{$customerinvoice['CustomerID']}}</td>  
    <td>{{$customerinvoice['InvoiceNumber']}}</td>
    <td>{{$customerinvoice['CustomerName']}}</td>
    <td>{{$customerinvoice['CustomerEmail']}}</td>
    <td>{{$customerinvoice['CustomerAddress']}}</td>
    <td>{{$customerinvoice['InvoiceDate']}}</td> 
<td>{{$customerinvoice['ItemNumber']}}</td>
<td>{{$customerinvoice['ItemName']}}</td>
<td>{{$customerinvoice['Quantity']}}</td>
<td>{{$customerinvoice['Price']}}</td>
<td>{{$customerinvoice['TaxRate']}}</td>
<td>{{$customerinvoice['TaxAmount']}}</td>
<td>{{$customerinvoice['Total']}}</td>

</tr>


</table>
<div class="text-center">
<a text-align="center" class="btn btn-success" role="button" href="/pdf/{{$customerinvoice->id}}">Generate<a>

</div>
@endsection
</div>