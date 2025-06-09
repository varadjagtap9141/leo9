<?php
include "navbar.php";
?>
<div class="row g-3">
    <div class="col-md-6">
        <div class="card card-body">
            <div class="d-flex">
                <h5>Job Cards</h5>
                <div class="ms-auto">
                    <a href="manage_job_card.php"><button class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Create Job Card"><i
                                class="fa-solid fa-plus"></i></button></a>
                </div>
            </div>
            <hr />
            <div style="scrollbar-width:none;" class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Job Card No</th>
                            <th>Client</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        <tr>

                            <td><span class="badge rounded-pill bg-label-primary me-1">Active</span></td>
                            <td>2022-09-15</td>
                            <td>JC/MUM/Media/2097</td>
                            <td>Albert Cook</td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-primary" type="button"
                                        class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td><span class="badge rounded-pill bg-label-success me-1">Completed</span></td>
                            <td>2022-09-15</td>
                            <td>JC/MUM/Media/2097</td>
                            <td>Barry Hunter</td>


                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-primary" type="button"
                                        class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-2"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td><span class="badge rounded-pill bg-label-info me-1">Scheduled</span></td>
                            <td>2022-09-15</td>
                            <td>JC/MUM/Media/2097</td>
                            <td>Trevor Baker</td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-primary" type="button"
                                        class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-2"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td><span class="badge rounded-pill  bg-label-warning me-1">Pending</span></td>
                            <td>2022-09-15</td>
                            <td>JC/MUM/Media/2097</td>
                            <td>Jerry Milton</td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-primary" type="button"
                                        class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-2"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-body table-responsive">
            <h5 class="fs-normal">Vendor Purchase Orders</h5>
            <hr />
            <div style="scrollbar-width:none;" class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Job Card No</th>
                            <th>Vendor</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><span class="badge rounded-pill bg-label-primary me-1">Active</span></td>

                            <td>JC/MUM/Media/2097 </td>
                            <td>Albert Cook</td>
                            <td>&#8377.<?=number_format(600000 )?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-primary" type="button"
                                        class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="badge rounded-pill bg-label-success me-1">Completed</span></td>
                            <td> JC/MUM/Media/2097 </td>
                            <td>Barry Hunter</td>
                            <td>&#8377.<?=number_format(600000 )?></td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-primary" type="button"
                                        class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-2"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="badge rounded-pill bg-label-info me-1">Scheduled</span></td>

                            <td> JC/MUM/Media/2097 </td>
                            <td>Trevor Baker</td>
                            <td>&#8377.<?=number_format(600000 )?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-primary" type="button"
                                        class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-2"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="badge rounded-pill  bg-label-warning me-1">Pending</span></td>
                            <td>
                                JC/MUM/Media/2097 
                            </td>
                            <td>Jerry Milton</td>
                            <td>&#8377.<?=number_format(600000 )?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-primary" type="button"
                                        class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-2"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>