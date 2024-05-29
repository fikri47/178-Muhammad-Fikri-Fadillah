<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .invoice-header {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .invoice-header-left {
            flex: 1;
        }
        .invoice-header-right {
            text-align: right;
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
        }
        .invoice-table th, .invoice-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .invoice-table th {
            background-color: #f2f2f2;
            text-align: left;
        }
        .invoice-table {
            text-align: left;
        }
        .total-row {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="invoice-header">
    <div class="invoice-header-left">
        <h2>Invoice</h2>
        <strong>{{$pemesanan->nama_pemesan}}</strong><br>
        <strong>{{$pemesanan->alamat_pemesan}}</strong><br>
        {{$pemesanan->telp}}<br>
        <p>Tanggal Pengiriman : {{ $surat->tgl_pengiriman }}</p>
    </div>    
</div>

<table class="invoice-table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Description</th>            
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$pemesanan->produk->nama}}</td>
            <td>{{$pemesanan->deskripsi}}</td>
            <td>RP. {{number_format($pemesanan->total)}}</td>
        </tr>
        <tr>
            <td>Shipping</td>
            <td>{{$surat->deskripsi_surat}}</td>
            <td>RP. {{number_format($surat->ongkos_kirim)}}</td>         
        </tr>       
        <tr class="total-row">
            <td colspan="2">Total</td>
            <td><strong>RP. {{number_format($totalBiaya)}}</strong></td>
        </tr>
    </tbody>
</table>

</body>
</html>
