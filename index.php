<?php
include "navbar.php";
?>
<?php
$query="SELECT * FROM services";
$result=mysqli_query($conn,$query);
?>
<?php
$query="SELECT yt_link FROM events LIMIT 3";
$event_result=mysqli_query($conn,$query);
function getYouTubeEmbedUrl($url) {
    // Handle full watch URLs
    if (strpos($url, 'watch?v=') !== false) {
        parse_str(parse_url($url, PHP_URL_QUERY), $params);
        return 'https://www.youtube.com/embed/' . $params['v'];
    }

    // Handle youtu.be short links
    if (strpos($url, 'youtu.be/') !== false) {
        $videoId = basename(parse_url($url, PHP_URL_PATH));
        return 'https://www.youtube.com/embed/' . $videoId;
    }
    return $url;
}
?>
<!-- hero section -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 p-0">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="2500">
                <div class="carousel-inner">
                    <div class="carousel-item overflow-hidden active slider_img position-relative">
                        <div class="carousel_overlay text-white d-flex align-items-center justify-content-center">
                            <!-- <div class="">
                  <i class="fa-solid fa-quote-left common_color"></i>
                  <p class="fw-semibold common_color">Discover Our Vision</p>
                  <h1 class="">Welcome to Where Every Space Tells a Story</h1>
                  <i class="fa-solid fa-quote-right common_color"></i>
                </div> -->
                        </div>
                        <img src="https://www.angleadvt.com/wp-content/uploads/2019/04/09.jpg"
                            class="d-block w-100 vh-100" alt="slider images">
                    </div>
                    <div class="carousel-item overflow-hidden slider_img position-relative">
                        <div class="carousel_overlay text-white d-flex align-items-center justify-content-center">
                            <!-- <div class="">
                  <i class="fa-solid fa-quote-left common_color "></i>
                  <p class="fw-semibold common_color">View Our Services</p>
                  <h1 class=""> We Transform Your Vision into Reality</h1>
                  <i class="fa-solid fa-quote-right common_color"></i>
                </div> -->
                        </div>
                        <img src="https://www.angleadvt.com/wp-content/uploads/2018/10/03_BOM_HindiDay_Hoarding.jpg"
                            class="d-block w-100 vh-100" alt="slider images">
                    </div>
                    <div class="carousel-item overflow-hidden slider_img position-relative">
                        <div class="carousel_overlay text-white d-flex align-items-center justify-content-center">
                            <!-- <div class="">
                  <i class="fa-solid fa-quote-left common_color"></i>
                  <p class="fw-semibold common_color">Learn About Our Process</p>
                  <h1 class="">Our Process Creative Collaborative Custom-Tailored</h1>
                  <i class="fa-solid fa-quote-right common_color"></i>
                </div> -->
                        </div>
                        <img src="https://www.angleadvt.com/wp-content/uploads/2018/10/07_BOM_TDay_Hoarding.jpg"
                            class="d-block w-100 vh-100" alt="slider images">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Us -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <h4 class="txt__color">About Us</h4>
            <h1 class="fw-bold txt__color">Who we are & What we do</h1>
            <div class="fs-5 lh-lg">
                <p>Leo9 is the next chapter in the evolution of Angle Advertising, pushing into new markets while
                    staying grounded in the creativity and expertise that have defined us. With offices across India and
                    the UK, we’re broadening our global reach, collaborating with brands worldwide, and driving the
                    future of marketing.</p>
                <p>Our philosophy is built on strong partnerships with like-minded individuals. As bold creatives, we
                    push boundaries and turn big ideas into real impact. We believe that authentic relationships drive
                    success, which is why we put people first—whether fostering connections with clients, teaming up
                    with strategic partners, or empowering our team.</p>
            </div>
        </div>
        <div class="col-md-6">
            <img class="img-fluid"
                src="https://www.angleadvt.com/leo9/wp-content/uploads/2025/04/about-image-2048x1882.png" alt="">
        </div>
    </div>
</div>
<!-- Services -->
<div class="container py-5">
    <div class="row g-3">
        <div class="col-md-12">
            <h1 class="txt__color">Services</h1>
        </div>
        <?php
        foreach($result as $service_row)
        {
            ?>
        <div class="col-md-4 service" data-aos="zoom-in">
            <a href="" class="text-decoration-none">
                <div class="card card-body border-0 bg-white shadow p-5 h-100">
                    <h5 class="card-title txt__color"><?=$service_row['service_title']?></h5>
                    <hr / class="divider mb-5">
                    <p class="card-text text-black"><?=$service_row['service_subtitle']?></p>
                </div>
            </a>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<!-- Event management -->
<div class="container py-5">
    <div class="row g-3">
        <div class="col-md-12">
            <h1 class="txt__color">Event Management
                <a href="https://www.youtube.com/@angleadvertising7066" style="width: 50px; height: 50px;"
                    class="btn bg__color live-btn text-white rounded-circle float-end  d-inline-flex align-items-center justify-content-center fs-5"
                    target="_blank"><i class="fa-solid fa-play"></i></a>
            </h1>
            <p class="fs-5 lh-lg">Leo9 has a strong understanding of event management and has developed a
                comprehensive event management strategy.</p>
        </div>
        <?php
        foreach($event_result as $event_row)
        {
            ?>
        <div class="col-md-4">
            <div class="card card-body border-0 shadow bg-white rounded-0 p-1">
                <div class="ratio ratio-4x3">
                    <iframe src="<?= getYouTubeEmbedUrl($event_row['yt_link']) ?>" title="YouTube video"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>

        <?php
        }
        ?>
    </div>
</div>
<!-- clients -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="txt__color fw-bold">Our Clients</h1>
            <div class="row py-4">
                <div class="swiper-container brand-slider overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <img width="auto" height="120"
                                src="https://www.angleadvt.com/leo9/wp-content/uploads/2025/04/01.png" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img width="auto" height="120"
                                src="https://www.angleadvt.com/leo9/wp-content/uploads/2025/04/02.png" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img width="auto" height="120"
                                src="https://www.angleadvt.com/leo9/wp-content/uploads/2025/04/03.png" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img width="auto" height="120"
                                src="https://www.angleadvt.com/leo9/wp-content/uploads/2025/04/04.png" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img width="auto" height="120"
                                src="https://www.angleadvt.com/leo9/wp-content/uploads/2025/04/09.png" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img width="auto" height="120"
                                src="https://www.angleadvt.com/leo9/wp-content/uploads/2025/04/06.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>