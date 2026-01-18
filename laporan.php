<?php
// ==========================
// LOGIKA PHP
// ==========================

// Ambil filter
$bulan = $_GET['bulan'] ?? '';
$tahun = $_GET['tahun'] ?? '';

// Nama bulan
$namaBulan = [
    1=>"Januari", 2=>"Februari", 3=>"Maret", 4=>"April",
    5=>"Mei", 6=>"Juni", 7=>"Juli", 8=>"Agustus",
    9=>"September", 10=>"Oktober", 11=>"November", 12=>"Desember"
];

// Data dummy (tanpa SQL)
$data = [
    [
        'id' => 1,
        'nama' => 'Oreo',
        'kategori' => 'Snack',
        'masuk' => 12,
        'keluar' => 8,
        'tanggal' => '2026-01-10'
    ],
    [
        'id' => 2,
        'nama' => 'Minyak Goreng',
        'kategori' => 'Sembako',
        'masuk' => 10,
        'keluar' => 7,
        'tanggal' => '2026-01-18'
    ],
    [
        'id' => 3,
        'nama' => 'Gula Pasir',
        'kategori' => 'Sembako',
        'masuk' => 20,
        'keluar' => 5,
        'tanggal' => '2026-02-02'
    ]
];

// Filter data
$filtered = [];

foreach ($data as $row) {
    $bulanData = date('n', strtotime($row['tanggal']));
    $tahunData = date('Y', strtotime($row['tanggal']));

    if (
        ($bulan == '' || $bulan == $bulanData) &&
        ($tahun == '' || $tahun == $tahunData)
    ) {
        $row['bulan'] = $namaBulan[$bulanData];
        $row['tahun'] = $tahunData;
        $row['stok_akhir'] = $row['masuk'] - $row['keluar'];
        $filtered[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Stok Gudang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">

        <h2>Toko Cahaya Frans - Laporan Stok Gudang</h2>

        <h5 class="mb-3">
            <?= $bulan ? $namaBulan[(int)$bulan] : 'Semua Bulan' ?>
            <?= $tahun ? $tahun : '' ?>
        </h5>

        <p>Alamat: Jalan Sekayam Raya No.1, Pontianak</p>

        <!-- FORM FILTER -->
        <form method="GET" class="d-flex gap-2 mb-4 justify-content-center">
            <select name="bulan" class="form-select w-auto">
                <option value="">Pilih Bulan</option>
                <?php foreach ($namaBulan as $key => $value): ?>
                    <option value="<?= $key ?>" <?= $key == $bulan ? 'selected' : '' ?>>
                        <?= $value ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <select name="tahun" class="form-select w-auto">
                <option value="">Pilih Tahun</option>
                <?php for ($y = date('Y'); $y >= 2020; $y--): ?>
                    <option value="<?= $y ?>" <?= $y == $tahun ? 'selected' : '' ?>>
                        <?= $y ?>
                    </option>
                <?php endfor; ?>
            </select>

            <button class="btn btn-primary">Filter</button>
        </form>

        <!-- TABEL -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-secondary">
                    <tr>
                        <th>No</th>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Masuk</th>
                        <th>Keluar</th>
                        <th>Stok Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($filtered): ?>
                        <?php foreach ($filtered as $i => $row): ?>
                            <tr>
                                <td><?= $i + 1 ?></td>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['kategori'] ?></td>
                                <td><?= $row['bulan'] ?></td>
                                <td><?= $row['tahun'] ?></td>
                                <td><?= $row['masuk'] ?> Pcs</td>
                                <td><?= $row['keluar'] ?> Pcs</td>
                                <td><?= $row['stok_akhir'] ?> Pcs</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9" class="text-center text-muted">
                                Data tidak ditemukan
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <button onclick="window.print()" class="btn btn-success mt-3">
            Download PDF
        </button>

    </div>
</div>

</body>
</html>
