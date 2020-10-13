@extends('layout')


<div class="content" >

@section('content')
@if (session('success'))
    <div class="alert alert-success">
    {{ session('success') }}
    </div>
@endif

<table id="example" class="display" cellspacing="0" >
<thead>
<tr>
    <td>Invoice Number</td>
    <td>Customer ID</td>
    <td>Customer Name</td>
    <td>Customer Email</td>
    <td>Customer Address</td>
    <td>Invoice Date</td>
    <td></td><td></td><td></td>
    
</tr>
</thead>

<tbody>

@foreach($customerinvoices as $customerinvoice)
<tr>
<td>{{$customerinvoice['InvoiceNumber']}}</td>
    <td>{{$customerinvoice['CustomerID']}}</td>
    <td>{{$customerinvoice['CustomerName']}}</td>
    <td>{{$customerinvoice['CustomerEmail']}}</td>
    <td>{{$customerinvoice['CustomerAddress']}}</td>
    <td>{{$customerinvoice['InvoiceDate']}}</td>
    <td><a class="btn btn-outline-primary" role="button" href="/viewlist/{{$customerinvoice->id}}">View<a></td>
    <td><a class="btn btn-outline-success" role="button" href="/edit/{{$customerinvoice->id}}">Edit<a></td>
    <td><a class="btn btn-outline-danger" role="button" href="/delete/{{$customerinvoice->id}}">Delete<a></td>
</tr>
@endforeach
</tbody>
</table>
 
@endsection
</div>








