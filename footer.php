  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
      integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/fff7dcb016.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="assets/script.js"></script>
  <script>
AOS.init();
  </script>
  </body>
  <?php
include "admin/master/connection.php";
?>
  <?php
$query="SELECT * FROM company_profile";
$result=mysqli_query($conn,$query);
$profile_row=mysqli_fetch_assoc($result);
?>
  <section class="bg-light">
      <div class="container py-4">
          <div class="row g-3">
              <div class="col-md-4 text-center">
                  <p class="fs-5 fw-semibold">Email:</p>
                  <h5 class="txt__color fw-bold"><?=$profile_row['email_1']?></h5>
                  <h5 class="txt__color fw-bold"><?=$profile_row['email_2']?></h5>
              </div>
              <div class="col-md-4 text-center">
                  <p class="fs-5 fw-semibold">Phone:</p>
                  <h5 class="txt__color fw-bold"><?=$profile_row['phone_no']?></h5>
              </div>
              <div class="col-md-4 text-center">
                  <p class="fs-5 fw-semibold">Address:</p>
                  <h5 class="txt__color fw-bold">Ingestre Court, Ingestre Pl, London W1F 0JL, United Kingdom</h5>
              </div>
          </div>
      </div>
      </div>
  </section>
  <footer class="bg__color py-4">
      <div class="container">
          <div class="row">
              <div class="col-md-4 p-2">
                  <a class="navbar-brand" href="#">
                      <img src="admin/components/uploads/<?=$profile_row['f_logo']?>"
                          alt="Leo9" width="auto" height="110">
                  </a>
                  <div class="mt-4 d-flex gap-2">
                      <a class="bg-white text-decoration-none txt__color rounded-circle d-inline-flex align-items-center justify-content-center"
                          href="<?=$profile_row['url_1']?>" style="width: 40px; height: 40px;">
                          <i class="fa-brands fa-facebook-f"></i>
                      </a>
                      <a class="bg-white text-decoration-none txt__color rounded-circle d-inline-flex align-items-center justify-content-center"
                          href="<?=$profile_row['url_2']?>" style="width: 40px; height: 40px;">
                          <i class="fa-brands fa-twitter"></i>
                      </a>
                      <a class="bg-white text-decoration-none txt__color rounded-circle d-inline-flex align-items-center justify-content-center"
                          href="<?=$profile_row['url_3']?>" style="width: 40px; height: 40px;">
                          <i class="fa-brands fa-google"></i>
                      </a>
                      <a class="bg-white text-decoration-none txt__color rounded-circle d-inline-flex align-items-center justify-content-center"
                          href="<?=$profile_row['url_4']?>" style="width: 40px; height: 40px;">
                          <i class="fa-brands fa-linkedin-in"></i>
                      </a>
                  </div>

              </div>
              <div class="col-md-4 p-2 text-white">
                  <h4 class="fw-semibold">Quick Links</h4>
                  <ul class="quick_links mt-3">
                      <li><a href="#" class="text-decoration-none text-white">About Us</a></li>
                      <li><a href="#" class="text-decoration-none text-white">Services</a></li>
                      <li><a href="#" class="text-decoration-none text-white">Contact Us</a></li>
                      <li><a href="#" class="text-decoration-none text-white">Case Study</a></li>
                      <li><a href="#" class="text-decoration-none text-white">Our Clients</a></li>
                  </ul>
                  <hr />
                  <h4 class="fw-semibold">Legal Stuff</h4>
                  <ul class="quick_links mt-3">
                      <li><a href="#" class="text-decoration-none text-white">Privacy Policy</a></li>
                      <li><a href="#" class="text-decoration-none text-white">Terms of Services</a></li>
                  </ul>
              </div>
              <div class="col-md-4 text-white">
                  <h4 class="fw-semibold mb-3">Office Address</h4>
                  <div class="row d-flex">
                      <div class="col-1 text-center p-2 d-flex align-items-center">
                          <i class="fa-solid fa-map-marker-alt fs-4"></i>
                      </div>
                      <div class="col-11">
                          <h5 class="fw-semibold text-white">Pune Address :</h5>
                          <p style="margin-top:-2px;">Alliance Prima, Office no.201, 3rd-Floor,
                              Plot no. Navi Peth, Pune, Maharashtra 411030</p>
                      </div>
                  </div>
                  <div class="row d-flex">
                      <div class="col-1 text-center p-2 d-flex align-items-center">
                          <i class="fa-solid fa-map-marker-alt fs-4"></i>
                      </div>
                      <div class="col-11">
                          <h5 class="fw-semibold text-white">Mumbai Address :</h5>
                          <p style="margin-top:-2px;">309 Narayan Udyog Bhavan, Dinshaw Petit Road,
                              Lalbaug, Mumbai: 400012</p>
                      </div>
                  </div>
                  <div class="row d-flex">
                      <div class="col-1 text-center p-2 d-flex align-items-center">
                          <i class="fa-solid fa-map-marker-alt fs-4"></i>
                      </div>
                      <div class="col-11">
                          <h5 class="fw-semibold text-white">London Address :</h5>
                          <p style="margin-top:-2px;">Ingestre Court, Ingestre Pl, London W1F 0JL, United Kingdom</p>
                      </div>
                  </div>
              </div>
          </div>
          <hr / class="text-white">
          <div class="row">
              <div class="col-md-12 text-white text-center p-2">
                  <p class=" fw-semibold">© Copyright 2025. <?=$profile_row['company_name']?> : All Rights Reserved.</p>
              </div>
          </div>
      </div>
  </footer>

  </html>