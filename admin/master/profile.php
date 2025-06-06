<?php
include "navbar.php";
include "connection.php";

$sql="SELECT * FROM company_profile";
$result = mysqli_query($conn, $sql);
$profile_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <h5>Company Profile</h5>
            <hr />
            <form action="../components/update_profile.php" method="POST" enctype="multipart/form-data">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card card-body">
                            <img class="w-100 h-100" src="../components/uploads/<?=$profile_row['logo']?>"
                                alt="Leo9 Angle Advertising">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="hidden" value="<?=$profile_row['profile_id']?>" name="profile_id">
                        <div class="form-group mb-2">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="<?=$profile_row['title']?>" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name"
                                value="<?=$profile_row['company_name']?>" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="phone_no">Contact No</label>
                            <input type="text" class="form-control" id="phone_no" name="phone_no"
                                value="<?=$profile_row['phone_no']?>" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="logo">Upload Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo">
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <h5>Other Information</h5>
                    <div class="col-md-3">
                        <div class="form-group mb-2">
                            <label for="email_1">Email</label>
                            <input type="email" class="form-control" id="email_1" name="email_1"
                                value="<?=$profile_row['email_1']?>" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-2">
                            <label for="email_2">Sub Email</label>
                            <input type="email" class="form-control" id="email_2" name="email_2"
                                value="<?=$profile_row['email_2']?>" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-2">
                            <label for="url_5">You Tube Channel URL</label>
                            <input type="url" class="form-control" id="url_5" name="url_5"
                                value="<?=$profile_row['url_5']?>" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-2">
                            <label for="brochure">Upload Brochure</label>
                            <input type="file" class="form-control" id="brochure" name="brochure">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <h5>Social Media URL's</h5>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="url_1">Facebook URL</label>
                            <input type="url" class="form-control" id="url_1" name="url_1"
                                value="<?=$profile_row['url_1']?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="url_2">Twitter URL</label>
                            <input type="url" class="form-control" id="url_2" name="url_2"
                                value="<?=$profile_row['url_2']?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="url_3">Google URL</label>
                            <input type="url" class="form-control" id="url_3" name="url_3"
                                value="<?=$profile_row['url_3']?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="url_4">LinkedIn URL</label>
                            <input type="url" class="form-control" id="url_4" name="url_4"
                                value="<?=$profile_row['url_4']?>" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-2">

                            <img class="w-100 h-100" src="../components/uploads/<?=$profile_row['favicon']?>" alt="Leo9 Angle Advertising">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-2">
                            <label for="favicon">Favicon Logo</label>
                            <input type="file" class="form-control" id="favicon" name="favicon">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-2 bg-warning p-2">
                            <img class="w-100 h-100" src="../components/uploads/<?=$profile_row['f_logo']?>" alt="Leo9 Angle Advertising">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-2">
                            <label for="f_logo">Footer Logo</label>
                            <input type="file" class="form-control" id="f_logo" name="f_logo">
                        </div>
                    </div>
                </div>
                <button onClick="return confirm('Are You Sure?')" type="submit" class="btn btn-primary float-end mt-3">
                    Update Company Profile
                </button>
            </form>
        </div>
    </div>
</div>
<script>
const phoneInput = document.getElementById('phone_no');
phoneInput.addEventListener('keypress', function(e) {
    if (this.type === "text") {
        e.preventDefault();
    }
});
</script>
<?php
include "footer.php";
?>