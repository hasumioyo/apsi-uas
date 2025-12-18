 
            <!-- Users Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Users Management</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="d-flex mb-4">
                        <a class="btn btn-sm btn-primary" href=""><i class="fas fa-box"></i> Add Item</a>
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
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2026</td>
                                    <td>0001</td>
                                    <td>Chitato</td>
                                    <td>100</td>
                                    <td>5</td>
                                    <td><a class="btn btn-sm btn-success" href="" data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="fa fa-edit"></i></a></td>
                                    <td><a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2026</td>
                                    <td>0002</td>
                                    <td>Pringles</td>
                                    <td>90</td>
                                    <td>5</td>
                                    <td><a class="btn btn-sm btn-success" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-edit"></i></a></td>
                                    <td><a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2026</td>
                                    <td>0003</td>
                                    <td>Indomie</td>
                                    <td>50</td>
                                    <td>5</td>
                                    <td><a class="btn btn-sm btn-success" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-edit"></i></a></td>
                                    <td><a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2026</td>
                                    <td>0004</td>
                                    <td>Lays</td>
                                    <td>80</td>
                                    <td>5</td>
                                    <td><a class="btn btn-sm btn-success" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-edit"></i></a></td>
                                    <td><a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2026</td>
                                    <td>0005</td>
                                    <td>Oreo</td>
                                    <td>35</td>
                                    <td>5</td>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Date:</label>
            <input type="date" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Id:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Item:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Stock:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Min.Stock:</label>
            <input type="text" class="form-control" id="recipient-name">
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
        