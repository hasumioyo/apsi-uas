 <!-- Sale & Revenue Start -->
 <div class="container-fluid pt-4 px-4">
     <div class="row g-4">
         <div class="col-sm-6 col-xl-3">
             <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                 <i class="fas fa-box text-primary fa-3x"></i>
                 <div class="ms-3">
                     <p class="mb-2">Available Stock</p>
                     <h6 class="mb-0 text-success">200</h6>
                 </div>
             </div>
         </div>
         <div class="col-sm-6 col-xl-3">
             <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                 <i class="fas fa-box text-primary fa-3x"></i>
                 <div class="ms-3">
                     <p class="mb-2">Low Stock</p> 
                     <h6 class="mb-0 text-warning">5</h6>
                 </div>
             </div>
         </div>
         <div class="col-sm-6 col-xl-3">
             <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                 <i class="fas fa-box text-primary fa-3x"></i>
                 <div class="ms-3">
                     <p class="mb-2">Out of Stock</p>
                     <h6 class="mb-0 text-danger">2</h6>
                 </div>
             </div>
         </div>
         <!-- <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div> -->
     </div>
 </div>
 <!-- Sale & Revenue End -->


 <!-- Sales Chart Start -->
 <!-- <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Worldwide Sales</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Salse & Revenue</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div> -->
 <!-- Sales Chart End -->


 <!-- Recent Sales Start -->
 <div class="container-fluid pt-4 px-4">
     <div class="bg-light text-center rounded p-4">
         <div class="d-flex align-items-center justify-content-between mb-4">
             <h6 class="mb-0">Recent Stock</h6>
             <a href="">Show All</a>
         </div>
         <div class="table-responsive">
             <table class="table text-start align-middle table-bordered table-hover mb-0">
                 <thead>
                     <tr class="text-dark">
                         <th scope="col"><input class="form-check-input" type="checkbox"></th>
                         <th scope="col">Date</th>
                         <th scope="col">Id</th>
                         <th scope="col">Item</th>
                         <th scope="col">Stock</th>
                         <th scope="col">Min.Stock</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td><input class="form-check-input" type="checkbox"></td>
                         <td>01 Jan 2045</td>
                         <td>0001</td>
                         <td>Chitato</td>
                         <td>100</td>
                         <td>5</td>
                         <td><a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail" href="">Detail</a></td>
                     </tr>
                 </tbody>
             </table>
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
