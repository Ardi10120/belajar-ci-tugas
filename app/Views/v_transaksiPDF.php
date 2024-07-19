<h1>Data Transaksi</h1>

<table border="1" width="100%" cellpadding="5">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Username</th>
        <th scope="col">Total Harga</th>
        <th scope="col">Alamat</th>
        <th scope="col">Ongkir</th>
        <th scope="col">Status</th>
    </tr>

    <?php foreach ($transaction as $index => $transaksi): ?>
        <tr>
            <th scope="row"><?php echo $index + 1 ?></th>
            <td><?php echo $transaksi['username'] ?></td>
            <td><?php echo number_to_currency($transaksi['total_harga'], 'IDR') ?></td>
            <td><?php echo $transaksi['alamat'] ?></td>
            <td><?php echo number_to_currency($transaksi['ongkir'], 'IDR') ?></td>
            <td><?php echo $transaksi['status'] ?></td>
        </tr>

    <?php endforeach ?>
</table>
Downloaded on <?= date("Y-m-d H:i:s") ?>
