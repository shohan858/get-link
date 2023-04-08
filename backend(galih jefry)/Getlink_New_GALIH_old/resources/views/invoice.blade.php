<!DOCTYPE html>
<html>
<head>
    <title>Invoice Pembayaran</title>
</head>
<body>
    <h1>Invoice Pembayaran</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Invoice</th>
                <th>Total Pembayaran</th>
                <th>Email Payer</th>
                <th>Deskripsi</th>
                <th>Tautan Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $invoice['external_id'] }}</td>
                <td>{{ $invoice['amount'] }}</td>
                <td>{{ $invoice['payer_email'] }}</td>
                <td>{{ $invoice['description'] }}</td>
                <td><a href="{{ $invoice['payment_url'] }}">Bayar Sekarang</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>