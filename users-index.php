 <!-- Users Start -->
 <div class="container-fluid pt-4 px-4">
   <div class="bg-light text-center rounded p-4">
     <div class="d-flex align-items-center justify-content-between mb-4">
       <h6 class="mb-0">Users Management</h6>
       <a href="">Show All</a>
     </div>
     <div class="d-flex mb-4">
       <a class="btn btn-sm btn-primary" href="" data-bs-toggle="modal" data-bs-target="#addModal" data-bs-whatever="@mdo"><i class="fas fa-box"></i> Add Item</a>
     </div>
     <div class="table-responsive">
       <table class="table text-start align-middle table-bordered table-hover mb-0">
         <thead>
           <tr class="text-dark">
             <th scope="col"><input class="form-check-input" type="checkbox"></th>
             <th scope="col">ID</th>
             <th scope="col">Name</th>
             <th scope="col">Email</th>
             <th scope="col">No. HP</th>
             <th scope="col">Edit</th>
             <th scope="col">Delete</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td><input class="form-check-input" type="checkbox"></td>
             <td>01</td>
             <td>Meriyanti</td>
             <td>Meriyanti@gmail.com</td>
             <td>087564857662</td>
             <td><a class="btn btn-sm btn-success" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-edit"></i></a></td>
             <td><a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash-alt"></i></a></td>
           </tr>
         </tbody>
       </table>
     </div>
   </div>
 </div>
 <!-- Users End -->

 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <form>
           <div class="mb-3">
             <label for="recipient-name" class="col-form-label">ID:</label>
             <input type="text" class="form-control" id="recipient-name" placeholder="01">
           </div>
           <div class="mb-3">
             <label for="message-text" class="col-form-label">Name:</label>
             <input type="text" class="form-control" id="recipient-name" placeholder="Meriyanti">
           </div>
           <div class="mb-3">
             <label for="message-text" class="col-form-label">Email:</label>
             <input type="text" class="form-control" id="recipient-name" placeholder="Meriyanti@gmail.com">
           </div>
           <div class="mb-3">
             <label for="message-text" class="col-form-label">No.HP:</label>
             <input type="text" class="form-control" id="recipient-name" placeholder="087564857662">
           </div>
         </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary">Send message</button>
       </div>
     </div>
   </div>
 </div>

 <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h1 class="modal-title fs-5" id="addModalLabel">Add Data</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>

       <div class="modal-body">
         <form>
           <div class="mb-3">
             <label for="recipient-name" class="col-form-label">ID:</label>
             <input type="text" class="form-control" id="recipient-name">
           </div>
           <div class="mb-3">
             <label for="message-text" class="col-form-label">Name:</label>
             <input type="text" class="form-control" id="recipient-name">
           </div>
           <div class="mb-3">
             <label for="message-text" class="col-form-label">Email:</label>
             <input type="text" class="form-control" id="recipient-name">
           </div>
           <div class="mb-3">
             <label for="message-text" class="col-form-label">No.HP:</label>
             <input type="text" class="form-control" id="recipient-name">
           </div>
         </form>
       </div>

       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary">Update</button>
       </div>
     </div>
   </div>
 </div>