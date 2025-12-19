 <!-- Admin Start -->
 <div class="container-fluid pt-4 px-4">
     <div class="bg-light text-center rounded p-4">
         <div class="d-flex align-items-center justify-content-between mb-4">
             <h6 class="mb-0">Admin Management</h6>
             <a href="">Show All</a>
         </div>
         <div class="d-flex mb-4">
             <a class="btn btn-sm btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fa fa-user-plus"></i> Add Admin</a>
         </div>
         <div class="table-responsive">
             <table class="table text-start align-middle table-bordered table-hover mb-0">
                 <thead>
                     <tr class="text-dark">
                         <th scope="col"><input class="form-check-input" type="checkbox"></th>
                         <th scope="col">ID Admin</th>
                         <th scope="col">Username</th>
                         <th scope="col">Nama</th>
                         <th scope="col">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td><input class="form-check-input" type="checkbox"></td>
                         <td>01</td>
                         <td>Jonathan</td>
                         <td>Jonathan Birila</td>
                         <td>
                             <a class="btn btn-sm btn-success" href="" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fa fa-edit"></i></a>
                             <button class="btn btn-sm btn-danger" href="" id="liveToastBtn" type="button"><i class="fa fa-trash-alt"></i></button>
                         </td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
 <!-- Admin End -->

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
                         <label for="recipient-name" class="col-form-label">ID Admin:</label>
                         <input type="text" class="form-control" id="recipient-name" placeholder="01">
                     </div>
                     <div class="mb-3">
                         <label for="message-text" class="col-form-label">Username:</label>
                         <input type="text" class="form-control" id="recipient-name" placeholder="Jonathan">
                     </div>
                     <div class="mb-3">
                         <label for="message-text" class="col-form-label">Nama:</label>
                         <input type="text" class="form-control" id="recipient-name" placeholder="Jonathan Birila">
                     </div>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-success">Submit</button>
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
                         <label for="recipient-name" class="col-form-label">ID Admin:</label>
                         <input type="text" class="form-control" id="recipient-name">
                     </div>
                     <div class="mb-3">
                         <label for="message-text" class="col-form-label">Username:</label>
                         <input type="text" class="form-control" id="recipient-name">
                     </div>
                     <div class="mb-3">
                         <label for="message-text" class="col-form-label">Nama:</label>
                         <input type="text" class="form-control" id="recipient-name">
                     </div>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-success">Submit</button>
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