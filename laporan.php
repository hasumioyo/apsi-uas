<!-- riwayat Produk Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div id="laporan-gudang">
            <h2 style="text-align:center;">Toko Cahaya Frans - Laporan Stok Gudang</h2>
            <h4 style="text-align:center;">Januari 2026</h4>

            <p style="text-align:center;">
                Alamat: Jalan Sekayam Raya No.1, Pontianak<br>
            </p>

            <div class="table-responsive" id="riwayatTable">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No</th>
                            <th scope="col">Id Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Stok Awal</th>
                            <th scope="col">Jumlah Masuk</th>
                            <th scope="col">Barang Keluar</th>
                            <th scope="col">Stok Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Oreo</td>
                            <td>Snack</td>
                            <td>12 Pcs</td>
                            <td>8 Pcs</td>
                            <td>4 Pcs</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>Minyak Goreng</td>
                            <td>Sembako</td>
                            <td>10 Pcs</td>
                            <td>7 Pcs</td>
                            <td>3 Pcs</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>

        <button onclick="window.print()">Download PDF</button>

        <!-- JS -->
        <script>
            const toastTrigger = document.getElementById('liveToastBtn')
            const toastLiveExample = document.getElementById('liveToast')
            if (toastTrigger) {
                toastTrigger.addEventListener('click', () => {
                    const toast = new bootstrap.Toast(toastLiveExample)

                    toast.show()
                })
            }
        </script>

        <script>
            function searchTable() {
                let input = document.getElementById("searchInput").value.toLowerCase();
                let rows = document.querySelectorAll("#riwayatTable tbody tr");

                rows.forEach(row => {
                    let text = row.innerText.toLowerCase();
                    row.style.display = text.includes(input) ? "" : "none";
                });
            }
        </script>