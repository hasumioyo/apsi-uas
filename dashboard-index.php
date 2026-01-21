 <!-- Sale & Revenue Start -->

 <div class="container-fluid pt-4 px-4">
     <div class="row mb-3">
         <div class="col-12">
             <div class="row g-3">
                 <!-- Card Stok Habis -->
                 <div class="col-md-6">
                     <div class="card shadow-sm border-0 h-100">
                         <div class="card-body d-flex align-items-center">
                             <div class="bg-danger text-white rounded p-3 me-3 fs-3">
                                 <i class="bi bi-box-seam"></i>
                             </div>
                             <div>
                                 <small class="text-muted">Stok Habis</small>
                                 <h3 class="mb-0 fw-bold">12</h3>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Card Stok Menipis -->
                 <div class="col-md-6">
                     <div class="card shadow-sm border-0 h-100">
                         <div class="card-body d-flex align-items-center">
                             <div class="bg-warning text-white rounded p-3 me-3 fs-3">
                                 <i class="bi bi-arrow-down-circle"></i>
                             </div>
                             <div>
                                 <small class="text-muted">Stok Menipis</small>
                                 <h3 class="mb-0 fw-bold">45</h3>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </div>


 <!-- Recent Sales Start -->
 <div class="container-fluid pt-4 px-4">
     <div class="bg-light text-center rounded p-2">
         <div class="alert alert-info d-flex align-items-center" role="alert">
             <i class="bi bi-info-circle me-2"></i>
             Stok barang telah mencapai batas minimum
         </div>

         <!-- Card -->
         <div class="card shadow-sm">
             <div class="card-body">

                 <!-- Top controls -->
                 <div class="row mb-3">
                     <div class="col-md-6 d-flex align-items-center">
                         <span class="me-2">Tampilkan</span>
                         <select class="form-select form-select-sm w-auto me-2">
                             <option selected>10</option>
                             <option>25</option>
                             <option>50</option>
                         </select>
                         <span>data</span>
                     </div>

                     <div class="col-md-6 text-end">
                         <div class="input-group input-group-sm w-50 ms-auto">
                             <span class="input-group-text">Cari</span>
                             <input type="text" class="form-control">
                         </div>
                     </div>
                 </div>

                 <!-- Table -->
                 <div class="table-responsive">
                     <table class="table table-bordered table-hover align-middle">
                         <thead class="table-light">
                             <tr class="text-center">
                                 <th>No.</th>
                                 <th>ID Barang</th>
                                 <th>Nama Barang</th>
                                 <th>Jenis Barang</th>
                                 <th>Stok</th>
                                 <th>Satuan</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td class="text-center">1</td>
                                 <td>B0004</td>
                                 <td>Gespax 500 SC</td>
                                 <td>Herbisida</td>
                                 <td class="text-center">
                                     <span class="badge rounded-pill bg-warning text-dark">10</span>
                                 </td>
                                 <td>Liter</td>
                             </tr>
                             <tr>
                                 <td class="text-center">2</td>
                                 <td>B0005</td>
                                 <td>Amonia Cair</td>
                                 <td>Bahan Kimia Pengolahan</td>
                                 <td class="text-center">
                                     <span class="badge rounded-pill bg-warning text-dark">5</span>
                                 </td>
                                 <td>Liter</td>
                             </tr>
                         </tbody>
                     </table>
                 </div>

                 <!-- Bottom info & pagination -->
                 <div class="row mt-3">
                     <div class="col-md-6">
                         Menampilkan 1 sampai 2 dari 2 data
                     </div>
                     <div class="col-md-6">
                         <nav class="d-flex justify-content-end">
                             <ul class="pagination pagination-sm mb-0">
                                 <li class="page-item disabled">
                                     <a class="page-link">&laquo;</a>
                                 </li>
                                 <li class="page-item active">
                                     <a class="page-link">1</a>
                                 </li>
                                 <li class="page-item disabled">
                                     <a class="page-link">&raquo;</a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                 </div>

             </div>
         </div>

     </div>
 </div>
 <!-- Recent Sales End -->


 <!-- Widgets Start -->
 <!-- <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">To Do List</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex mb-2">
                                <input class="form-control bg-transparent" type="text" placeholder="Enter task">
                                <button type="button" class="btn btn-primary ms-2">Add</button>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox" checked>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><del>Short task goes here...</del></span>
                                        <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
 <!-- Widgets End -->

 <!-- Modal Detail
 <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Stock</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 Data : 01 Jan 2045
             </div>
             <div class="modal-body">
                 ID : 0001
             </div>
             <div class="modal-body">
                 Item : Chitato
             </div>
             <div class="modal-body">
                 Stock : 100
             </div>
             <div class="modal-body">
                 Min. Stok : 5
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Download</button>
             </div>
         </div>
     </div>
 </div> -->

 <!-- Modal Detail -->
 <div class="modal fade" id="modalDetail" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content shadow-sm">
             <div class="modal-header">
                 <h5 class="modal-title fw-semibold">Detail Stock</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <div class="modal-body">
                 <div class="detail-item">
                     <span class="label">Data</span>
                     <span class="value">01 Jan 2045</span>
                 </div>
                 <div class="detail-item">
                     <span class="label">ID</span>
                     <span class="value">0001</span>
                 </div>
                 <div class="detail-item">
                     <span class="label">Item</span>
                     <span class="value">Chitato</span>
                 </div>
                 <div class="detail-item">
                     <span class="label">Stock</span>
                     <span class="value fw-semibold">100</span>
                 </div>
                 <div class="detail-item">
                     <span class="label">Min. Stok</span>
                     <span class="value text-danger fw-semibold">5</span>
                 </div>
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                     Close
                 </button>
                 <button type="button" class="btn btn-primary">
                     Download
                 </button>
             </div>
         </div>
     </div>
 </div>