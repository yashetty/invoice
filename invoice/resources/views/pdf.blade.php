@extends('layout')


<div class="content" >

@section('content')

    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
                    {{$customerinvoice['CustomerName']}}<br>
                    {{$customerinvoice['CustomerAddress']}}
    				</address>
                </div>

                <div class="col-xs-6 text-right">
    				<address>
        			<strong>Invoice Number</strong><br>
                    {{$customerinvoice['InvoiceNumber']}}

    				</address>
    			</div>
    			
    		</div>

    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					Cash<br>
    					{{$customerinvoice['CustomerEmail']}}
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Invoice Date:</strong><br>
    					{{$customerinvoice['InvoiceDate']}}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item Number</strong></td>
        							<td class="text-center"><strong>Item Name</strong></td>
									<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
                                    <td class="text-center"><strong>Tax Rate(%)</strong></td>
                                    <td class="text-center"><strong>Tax Amount</strong></td>

                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td>{{$customerinvoice['ItemNumber']}}</td>
    								
    								<td class="text-center">{{$customerinvoice['ItemName']}}</td>
									<td class="text-center">{{$customerinvoice['Quantity']}}</td>
    								<td class="text-center">{{$customerinvoice['Price']}} Rs</td>
                                    <td class="text-center">{{$customerinvoice['TaxRate']}}</td>
                                    <td class="text-center">{{$customerinvoice['TaxAmount']}} Rs</td>
    								<td class="text-right">{{$customerinvoice['Total']}} Rs</td>
    							</tr>
                                
    							
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
									<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">{{$customerinvoice['Total']}} Rs</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>

         
    </div>


@endsection
</div>