<?php
include "navbar.php";
?>
<div class="row g-3">
    <div class="col-md-12">
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modalCenter">Create Purchase Order</button>
    </div>
</div>
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Vendor Purchase Order(Event JC)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <label for="purchase_order_no" class="form-label">Purchase Order No</label>
                            <input type="text" placeholder="To Be Generated" class="form-control" id="text" name="text"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="vendor" class="form-label">Vendor</label>
                            <select class="form-select" id="vendor" name="vendor">
                                <option selected disabled value="">Select Vendor</option>
                                <option value="1">Vendor 1</option>
                                <option value="2">Vendor 2</option>
                                <option value="3">Vendor 3</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="client_name" class="form-label">Client Name</label>
                            <input type="text" placeholder="Auto Select from DB Tbl"
                                class="form-control border-0 bg-white shadow-none" id="client_name" name="client_name"
                                required readonly>
                        </div>
                    </div>
                    <hr />
                    <div class="row g-2 table-responsive">
                        <h5>PO Items
                            <button type="button" class="btn btn-secondary btn-sm float-end" onclick="addRow()">+ Add
                                Row</button>
                        </h5>
                        <table style="scrollbar-width:none;" class="table table-bordered" id="po-items-table">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>HSN/SAC</th>
                                    <th>Size - Width & Height (UNITS)</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="po-row">
                                    <td><input type="text" class="form-control" required></td>
                                    <td>
                                        <select class="form-select" name="hsn_sac[]" required>
                                            <option selected disabled value="">Select</option>
                                            <option value="1">Branding-18%</option>
                                            <option value="2">Branding-18%</option>
                                            <option value="3">Branding-18%</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <input type="number" class="form-control me-2" required>
                                            <input type="number" class="form-control" required>
                                        </div>
                                    </td>
                                    <td><input type="number" class="form-control" required></td>
                                    <td><input type="number" class="form-control" required></td>
                                    <td><input type="text"
                                            class="form-control border-0 shadow-none text-black fw-bold bg-white"
                                            required></td>
                                    <td><button type="button" class="btn btn-danger btn-sm delete-row"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row g-2 mt-3">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label for="" class="col-sm-6 col-form-label text-end fw-bold">GROSS AMOUNT :</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-6 col-form-label text-end fw-bold">DISCOUNT :</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="" class="col-sm-6 col-form-label text-end fw-bold">SGST :</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-6 col-form-label text-end fw-bold">CGST :</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-6 col-form-label text-end fw-bold">OTHER :</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="">
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label for="" class="col-sm-6 col-form-label text-end fw-bold">NET PAYABLE :</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row g-2">
                        <h5>Other Details</h5>
                        <div class="col-md-6">
                            <label for="">Delivery Place</label>
                            <textarea class="form-control" placeholder="" id=""></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="date" class="form-label">Delivery Date</label>
                            <input type="date" class="form-control" name="date" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">Terms & Conditions</label>
                            <textarea class="form-control" placeholder="" id=""></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Payment Terms</label>
                            <textarea class="form-control" placeholder="" id="ck"></textarea>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary float-end">Save Purchase Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>