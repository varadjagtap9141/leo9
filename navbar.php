<!DOCTYPE html>
<html lang="en">
<?php
include "admin/master/connection.php";
?>
<?php
$query="SELECT * FROM company_profile";
$result=mysqli_query($conn,$query);
$profile_row=mysqli_fetch_assoc($result);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$profile_row['title']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" type="image/x-icon" href="admin/components/uploads/<?=$profile_row['favicon']?>" />

</head>
<body>
    <!-- header -->
    <header style="background-color:#f48140">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-white my-3">
                    <div class="d-flex hstack gap-3">
                        <div class="">
                            <i class="fa-solid fa-phone"></i>
                            <a class="text-decoration-none text-white" href="tel:+91 9881159141"><?=$profile_row['phone_no']?></a>
                        </div>
                        <div class="vr"></div>
                        <div class="">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:<?=$profile_row['email_1']?>" class="text-decoration-none text-white"><?=$profile_row['email_1']?></a>
                        </div>
                        <div class="ms-auto">
                            <a class="text-white" href="<?=$profile_row['url_1']?>"><i class="fa-brands fa-facebook-f mx-2"></i></a>
                            <a class="text-white" href="<?=$profile_row['url_2']?>"><i class="fa-brands fa-twitter mx-2"></i></a>
                            <a class="text-white" href="<?=$profile_row['url_3']?>"><i class="fa-brands fa-google mx-2"></i></a>
                            <a class="text-white" href="<?=$profile_row['url_4']?>"><i class="fa-brands fa-linkedin-in mx-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top py-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="admin/components/uploads/<?=$profile_row['logo']?>" alt="Leo9"
                    width="auto" height="60">
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold text-uppercase mx-3 active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold text-uppercase mx-3" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold text-uppercase mx-3" href="#">Case Study</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold text-uppercase mx-3" href="#">SErvices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold text-uppercase mx-3" href="#">Our Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold text-uppercase mx-3" href="#">Contact Us</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a class="btn btn-outline-black fw-semibold text-uppercase bg__color text-white rounded-0" href="admin/components/uploads/<?=$profile_row['brochure']?>" download>Case Study</a>
                </div>

            </div>
        </div>
    </nav>