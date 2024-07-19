<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php

if (session()->getFlashdata('success')) {
    ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
}

?>

<?php
if (session()->role != 'admin') {
    ?>
    <div class="alert alert-primary" role="alert">
        Anda bukan admin
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php

}
?>

<?php
if (session()->role == 'admin') {
    ?>
    <a type="button" href="<?= base_url('transaksi/download') ?>" class="btn btn-success">Download Data</a>

    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Alamat</th>
                <th scope="col">Ongkir</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaction as $index => $transaksi): ?>
                <tr>
                    <th scope="row"><?php echo $index + 1 ?></th>
                    <td><?php echo $transaksi['username'] ?></td>
                    <td><?php echo number_to_currency($transaksi['total_harga'], 'IDR') ?></td>
                    <td><?php echo $transaksi['alamat'] ?></td>
                    <td><?php echo number_to_currency($transaksi['ongkir'], 'IDR') ?></td>
                    <td><?php echo $transaksi['status'] ?></td>

                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#editModal-<?= $transaksi['id'] ?>">
                            Ubah Status
                        </button>
                    </td>
                </tr>

                <!-- Modal untuk setiap transaksi -->
                <div class="modal fade" id="editModal-<?= $transaksi['id'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?= base_url('transaksi/edit/' . $transaksi['id']) ?>" method="post"
                                enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="text" name="status" class="form-control" id="status"
                                            value="<?= $transaksi['status'] ?>" placeholder="Status" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </tbody>
    </table>
    <?php

}
?>


<?= $this->endSection() ?>