<?php
include "navbar.php";

// Fetch all job cards
$query = "SELECT * FROM job_cards";
$result = mysqli_query($conn, $query);
?>

<!-- Dropdown Menu -->
<div class="dropdown float-end">
    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Select Job Card Type
    </button>
    <ul class="dropdown-menu">
        <?php while($card_row = mysqli_fetch_assoc($result)) { ?>
        <li>
            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                data-bs-target="#modal_<?= $card_row['job_card_type_id'] ?>">
                <?=$card_row['job_card_cats']?>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>






























<?php
mysqli_data_seek($result, 0);
while($row = mysqli_fetch_assoc($result)) {
    $id = $row['job_card_type_id'];
    $cat = $row['job_card_cats'];
?>

<div class="modal fade" id="modal_<?= $id ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= $cat ?> Job Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">


                <?php 
                if ($id == 1) 
                { ?>
                <form action="../components/save_print_offset_card.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="job_card_type_id" value="<?= $id ?>">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label>Client Name</label>
                            <input type="text" name="client_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>Logo</label>
                            <input type="file" name="logo" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 float-end">Submit</button>
                </form>
                <?php }

                elseif ($id == 2) { 
                ?>
                <form action="../components/save_print_digital_card.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="job_card_type_id" value="<?= $id ?>">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label>Agency Name</label>
                            <input type="text" name="agency_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>Contact Person</label>
                            <input type="text" name="contact_person" class="form-control" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 float-end">Submit</button>
                </form>
                <?php }
                
                 elseif($id==4)
                {
                ?>
                <form action="../components/save_event_card.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="job_card_type_id" value="<?= $id ?>">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h5>Job Card Information</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Client</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Assign To</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Branch</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Deadline</label>
                                        <input type="date" class="form-control" id="date" required readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Time</label>
                                        <input type="time" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h5>Job Card Details</h5>
                            <div class="form-group mb-2">
                                <label for="">Job Name</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Width</label>
                                        <input type="number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Height</label>
                                        <input type="number" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Unit</label>
                                        <select class="form-select" name="" required>
                                            <option selected disabled value="">Select</option>
                                            <option value="1">Branding-18%</option>
                                            <option value="2">Branding-18%</option>
                                            <option value="3">Branding-18%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Qty</label>
                                        <input type="number" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Target Audience</label>
                                <input type="text" class="form-control" id="" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Color</label>
                                <input type="text" class="form-control" id="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Contact Person</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Brief</label>
                                <textarea class="form-control" name="" id="ck"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Invoice Brief</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Add Attachments</label>
                                <input type="file" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 float-end">Submit</button>
                </form>
                <?php
                }


                elseif($id==6)
                {
                ?>
                <form action="../components/save_audio_video_card.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="job_card_type_id" value="<?= $id ?>">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h5>Job Card Information</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Client</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Assign To</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Branch</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Deadline</label>
                                        <input type="date" class="form-control" id="date" required readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Time</label>
                                        <input type="time" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h5>Job Card Details</h5>
                            <div class="form-group mb-2">
                                <label for="">Job Name</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="">Target Audience</label>
                                <input type="text" class="form-control" id="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Contact Person</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Social Media</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Commercial Film</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Short Film</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Jingle</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">TV</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Radio</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Other</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Contact Person</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Brief</label>
                                <textarea class="form-control" name="" id="ck"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Invoice Brief</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Add Attachments</label>
                                <input type="file" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 float-end">Submit</button>
                </form>
                <?php
                }



                elseif($id==8)
                {
                    ?>
                <form action="../components/save_media_card.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="job_card_type_id" value="<?= $id ?>">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h5>Job Card Information</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Client</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Assign To</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Branch</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Deadline</label>
                                        <input type="date" class="form-control" id="date" required readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Time</label>
                                        <input type="time" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h5>Job Card Details</h5>
                            <div class="form-group mb-2">
                                <label for="">Job Name</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Width</label>
                                        <input type="number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Height</label>
                                        <input type="number" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Unit</label>
                                        <select class="form-select" name="" required>
                                            <option selected disabled value="">Select</option>
                                            <option value="1">Branding-18%</option>
                                            <option value="2">Branding-18%</option>
                                            <option value="3">Branding-18%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Qty</label>
                                        <input type="number" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Target Audience</label>
                                <input type="text" class="form-control" id="" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Color</label>
                                <input type="text" class="form-control" id="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Contact Person</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Brief</label>
                                <textarea class="form-control" name="" id="ck"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Invoice Brief</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Add Attachments</label>
                                <input type="file" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 float-end">Submit</button>
                </form>
                <?php
                } 


                elseif($id==9)
                {
                ?>
                <form action="../components/save_audio_video_card.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="job_card_type_id" value="<?= $id ?>">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h5>Job Card Information</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Client</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Assign To</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Branch</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Deadline</label>
                                        <input type="date" class="form-control" id="date" required readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Time</label>
                                        <input type="time" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h5>Job Card Details</h5>
                            <div class="form-group mb-2">
                                <label for="">Job Name</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="">Target Audience</label>
                                <input type="text" class="form-control" id="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Contact Person</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Social Media</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Commercial Film</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Short Film</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Jingle</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">TV</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Radio</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Other</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Contact Person</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Brief</label>
                                <textarea class="form-control" name="" id="ck"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Invoice Brief</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Add Attachments</label>
                                <input type="file" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 float-end">Submit</button>
                </form>
                <?php
                }


                
                elseif($id==10)
                {
                    ?>
                <form action="../components/save_other_card.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="job_card_type_id" value="<?= $id ?>">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h5>Job Card Information</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Client</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Assign To</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Branch</label>
                                <select class="form-select" name="" required>
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Branding-18%</option>
                                    <option value="2">Branding-18%</option>
                                    <option value="3">Branding-18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Deadline</label>
                                        <input type="date" class="form-control" id="date" required readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Time</label>
                                        <input type="time" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h5>Job Card Details</h5>
                            <div class="form-group mb-2">
                                <label for="">Job Name</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Contact Person</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Brief</label>
                                <textarea class="form-control" name="" id="ck"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Invoice Brief</label>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Add Attachments</label>
                                <input type="file" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 float-end">Submit</button>
                </form>
                <?php
                }   
                    
                    
                    
                ?>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<?php include "footer.php"; ?>