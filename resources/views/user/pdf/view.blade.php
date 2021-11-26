<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<ul>
		<li>Vendor Name : {{ $invoice->getVendor->full_name }}</li>
		<li>Invoice Number : {{ $invoice->invoice_number }}</li>
		<li>Descriptions : {{ $invoice->desc }}</li>
	</ul>

	<table>
		<thead>
			<tr>
				<th>Invoice Number</th>
				<th>Product Name</th>
				<th>Quantity</th>
			</tr>
		</thead>
		<tbody>
			@forelse($invoice->getProductQty as $ProductQty)
			<tr>
				<td>{{ $ProductQty->getInvoice->invoice_number }}</td>
				<td>{{ $ProductQty->product_name }}</td>
				<td>{{ $ProductQty->qty }}</td>
			</tr>
			@empty
			<tr>
				<td>Data not found.</td>
			</tr>
			@endforelse
		</tbody>
	</table>
</body>
</html>