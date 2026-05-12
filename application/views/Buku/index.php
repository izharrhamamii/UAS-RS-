<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Data Buku</h1>

<!-- 🔥 TOMBOL TAMBAH -->
<a href="<?= base_url('buku/tambah'); ?>" class="btn btn-primary mb-3">
    Tambah Buku
</a>

<table class="table table-bordered" id="dataTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Lokasi Rak</th>
        </tr>
    </thead>

    <tbody>
    <?php $no=1; foreach($buku as $b): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $b->kode_buku ?></td>
            <td><?= $b->judul ?></td>
            <td><?= $b->penulis ?></td>
            <td><?= $b->penerbit ?></td>
            <td><?= $b->tahun ?></td>
            <td><?= $b->nama_kategori ?></td>
            <td><?= $b->stok ?></td>
            <td><?= $b->lokasi_rak ?></td>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>

</div>