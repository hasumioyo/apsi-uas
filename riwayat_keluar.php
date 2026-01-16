<!-- riwayat Produk Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Riwayat Stok Keluar</h6>
            <a href="">Show All</a>
        </div>
        <div class="d-flex mb-4">
            <a class="btn btn-sm btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fas fa-box"></i> Add Riwayat Keluar</a>
        </div>
        <!-- Search bar -->
        <div class="search-container">
            <i class="search-icon">🔍</i>
            <input type="text" id="searchInput" placeholder="Search users..." onkeyup="searchTable()">
        </div>
        <!-- Search bar end -->
        <div class="table-responsive" id="riwayatTable">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Id Riwayat</th>
                        <th scope="col">Id Barang</th>
                        <th scope="col">Id User</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>0101</td>
                        <td>123</td>
                        <td>1</td>
                        <td>Oreo</td>
                        <td>Snack</td>
                        <td>12 Pcs</td>
                        <td>Rp. 120.000</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fa fa-edit"></i></a>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-danger" href="" id="liveToastBtn" type="button"><i class="fa fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- riwayat produk End -->

<!-- modal edit -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">ID Riwayat:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="0101">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Id Barang:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="123">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Id User:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="1">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Nama Barang:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Oreo">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Tipe</label>
                        <select id="disabledSelect" class="form-select">
                            <option>Snack</option>
                            <option>Sembako</option>
                            <option>Sabun</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Jumlah:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="12 Pcs">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Id Riwayat:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Id Barang:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Id User:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="1">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Nama Barang:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Tipe</label>
                        <select id="disabledSelect" class="form-select">
                            <option>Snack</option>
                            <option>Sembako</option>
                            <option>Sabun</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Jumlah:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- notif hapus -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Notifikasi!!</strong>
            <small>10 secs ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Data ini sudah di hapus.
        </div>
    </div>
</div>

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