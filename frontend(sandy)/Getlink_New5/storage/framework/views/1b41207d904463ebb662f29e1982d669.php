<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET LINK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('assets_landing_page/styles/style.css')); ?> ">

    <script src="https://www.google.com/recaptcha/api.js?render=6Lfesj4lAAAAAOub86hA8f8a1B7uI6GNeV59_2Ex"></script>

    
    

    

</head>

<body>

    <!-- NavBar -->

    <nav class="navbar bg-body-tertiary shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?php echo e(asset('assets_landing_page/img/logo-text2.png')); ?> " alt="Logo" width="120"
                    class="d-inline-block align-text-top ms-5">
            </a>
            <?php if(Auth::check()): ?>
                
                <a href="/logout" class="btn btn-outline-primary ms-auto rounded-pill me-5 btn-large"
                    style="width: 20%">logout</a>
            <?php else: ?>
                <a href="/sesi" class="btn btn-outline-primary ms-auto rounded-pill me-5 btn-large" type="button"
                    style="width: 20%">Login</a>
            <?php endif; ?>
        </div>
    </nav>

    <!-- End Navbar -->

    <!-- Hero -->

    <!-- <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="__landing_h1">Agar lebih enak, ringkas dilihat pilih GetLink</h1>
        <p class="__landing_p">Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting.</p>
        <form action="">
          <input id="input_link" class="__landing_input" type="text" placeholder="Masukkan Link">
          <button id="button_link" class="__landing_button" type="submit">
            <img id="image_link" src=" assets_landing_page/img/Add-Link.png">
          </button>
        </form>
        <span id="copy_success_msg" class="copy-msg">Berhasil copy</span>
      </div>
      <div class="col-6">
        <div class="__landing_lingkaran">
          <img class="__landing_image" src=" assets_landing_page/img/firl2.png">
        </div>
      </div>
    </div>
  </div> -->

    <div class="hero_container">
        <div class="hero_kiri">
            <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->id == 1): ?>
                    <h1 class="__hero_h1">
                        <?php echo e($item->title); ?>

                    </h1>
                    <p class="__hero_p">
                        <?php echo e($item->subtitle); ?>

                    </p>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <form id="form_link" method="POST" action="<?php echo e(route('generate.shorten.link.post')); ?>">
                <?php echo csrf_field(); ?>
                <label id="tampil_link">
                    <input id="input_link" class="__hero_input" type="text" placeholder="Masukkan Link" />
                </label>
                <button id="button_link" class="__hero_button" type="submit">
                    <img id="image_link" src="<?php echo e(asset('assets_landing_page/img/Add-Link.png')); ?> " />
                </button>
                <div id="cakecap" class="form-group<?php echo e($errors->has('g-recaptcha-response') ? ' has-error' : ''); ?>"
                    style="display: none">
                    <div class="col-md-6">
                    </div>
                </div>
            </form>
        </div>
        <div class="hero_kanan">
            <img class="__hero_lingkaran" src="<?php echo e(asset('assets_landing_page/img/Ellipse 1.png')); ?> " alt="eclipse">
            <img class="__hero_image" src="<?php echo e(asset('assets_landing_page/img/firl2.png')); ?> " />
        </div>
    </div>

    <!-- End Hero -->

    <!-- Space -->

    <section style="background-color: #BFACE2;">
        <div class="space">
            <div class="spotify">
                <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="box_1">
                        <img src="<?php echo e(asset('gambar/' . $item->image)); ?>" style="width:130px;" xalt="">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- End space -->

    <!-- Short link -->

    <section>
        <div class="short_link">
            <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->id == 2): ?>
                    <div class="sl_kanan">
                        <img src="<?php echo e(asset('gambar/' . $item->image)); ?> " class="img-fluid" alt="" />
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="sl_kiri">
                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->id == 2): ?>
                        <h1 class="heading-1"><?php echo e($item->title); ?></h1>
                        <p class="para">
                            <?php echo e($item->subtitle); ?>

                        </p>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- End Short link -->

    <!-- Microsit -->

    <!-- ======= Miicrosite Section ======= -->

    <section>
        <div class="box_on_dev">
            <p class="on_dev">on development</p>
        </div>
        <div class="microsite">
            <div class="microsite_kiri">
                <h1 class="microsite_h1">Microsite</h1>
                <div class="gear">
                    <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->id == 3): ?>
                            <img src="<?php echo e(asset('gambar/' . $item->image)); ?> " alt="" />
                            <div class="microsite_text">
                                <h3 class="microsite_h3"><b><?php echo e($item->title); ?></b></h3>
                                <p class="microsite_p">
                                    <?php echo e($item->subtitle); ?>

                                </p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="people">
                    <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->id == 4): ?>
                            <img src="<?php echo e(asset('gambar/' . $item->image)); ?> " alt="" />
                            <div class="microsite_text">
                                <h3 class="microsite_h3"><b><?php echo e($item->title); ?></b></h3>
                                <p class="microsite_p">
                                    <?php echo e($item->subtitle); ?>

                                </p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="microsite_kanan">
                <img class="incroGam" src="<?php echo e(asset('assets_landing_page/img/2 2.png')); ?> " alt="" />
            </div>
        </div>
    </section>

    <!-- <section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
          <div class="content mb-3">
            <strong><h1>Microsite.</h1></strong>
          </div>
          <div class="accordion-list">
            <ul>
              <li>
                <div class="card">
                  <div class="card-body bg-light">
                    <span>
                      <img src=" assets_landing_page/img/Gears.png" style="width:60px; height:70px;" alt="">
                    </span>
                    <strong>Gratis Semua Pengguna</strong>
                  </div>
                </div>
              </li>
              <li>
                <div class="card">
                  <div class="card-body bg-light">
                    <span>
                      <img src="assets_landing_page/img/People.png" style="width:60px; height:60px;" alt="">
                    </span>
                    <strong>Gratis Semua Pengguna</strong>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets_landing_page/img/2 2.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
    </div>
  </section> -->

    <!-- End Microsite Section -->

    <!-- Banner -->

    <div class="banner_container">
        <img class="banner_arrow" src="<?php echo e(asset('assets_landing_page/img/Vector 7.png')); ?> " alt="">


        <div class="banner_kanan">
            <h1 class="banner_h1">AYO SEGERA BERGABUNG!</h1>
            <h3 class="banner_h3">Daftar Sekarang Gratis!</h3>
            <p class="banner_p-1">Dapatkan akses seluruh fitur sengan bergabung dengan <br> Getlink.</p><br>
            <a href="" class="banner_button">
                Daftar Sekarang
            </a><br>
            <p class="banner_small">Gratis tanpa biaya</small>
        </div>

        <div class="banner_kiri">
            <img class="banner_gambar-kiri"
                src="<?php echo e(asset('assets_landing_page/img/woman in online meetings.png')); ?> " alt="">
            <img class="banner_eclippse" src="<?php echo e(asset('assets_landing_page/img/Ellipse 33.png')); ?> ">
        </div>
    </div>

    <!-- End banner -->

    <!-- ======= CMS Section == -->

    <section style="margin-top: 170px; margin-bottom: 50px;">
        <div align="center" class="center">
            <div class="box_on_dev">
                <p class="on_dev">on development</p>
            </div>
        </div>
        <div class="CMS">
            <div class="CMS_kiri">
                <img class="cms_gmb" src="<?php echo e(asset('assets_landing_page/img/3 1.png')); ?> " alt="">
            </div>
            <div class="CMS_kanan">
                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->id == 5): ?>
                        <h1 class="CMS_h1"><?php echo e($item->title); ?></h1>
                        <p class="CMS_p"><?php echo e($item->subtitle); ?></p>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->id == 6): ?>
                        <div class="CMS_li">
                            <img class="CMS_img" src="<?php echo e(asset('assets_landing_page/img/Vector (1).png')); ?> "
                                alt="">
                            <p class="CMS_li_p"><?php echo e($item->title); ?></p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->id == 7): ?>
                        <div class="CMS_li">
                            <img class="CMS_img" src="<?php echo e(asset('assets_landing_page/img/Vector (1).png')); ?> "
                                alt="">
                            <p class="CMS_li_p"><?php echo e($item->title); ?></p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->id == 8): ?>
                        <div class="CMS_li">
                            <img class="CMS_img" src="<?php echo e(asset('assets_landing_page/img/Vector (1).png')); ?> "
                                alt="">
                            <p class="CMS_li_p"><?php echo e($item->title); ?></p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- <section id="skills" class="skills">
    <div class="skills_container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
          <img src="assets_landing_page/img/3 1.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100" style="margin-top: 110px;">
          <h3>Content Management System</h3>
          <p class="fst-italic">
            Buat landing page anda tanpa perlu ngoding
          </p>
          <div class="skills-content">
            <i class="fa-solid fa-check mb-2"></i><span class="ms-3 fs-6">Penggunaan yang mudah</span><br>
            <i class="fa-solid fa-check mb-2"></i><span class="ms-3 fs-6">Desain yang responsive</span><br>
            <i class="fa-solid fa-check"></i><span class="ms-3 fs-6">Banyak pilihan template</span>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <!-- End CMS Section -->

    <!-- List -->

    <section>
        <div align="center" style="margin-bottom: 30px;">
            <h1 class="list_top_h1">Keunggulan</h1>
            <p class="list_top_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>

        <div class="list_container">
            <div class="list_kanan">
                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->id == 9): ?>
                        <div class="list-row">
                            <div class="list_gmb">
                                <img src="<?php echo e(asset('gambar/' . $item->image)); ?> " alt="Logo"
                                    class="d-inline-block align-text-top">
                            </div>
                            <div class="list_text">
                                <h4 class="list_h4"><b><?php echo e($item->title); ?></b></h4>
                                <p class="list_p">
                                    <?php echo e($item->subtitle); ?>

                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->id == 11): ?>
                        <div class="list-row">
                            <div class="list_gmb">
                                <img src="<?php echo e(asset('gambar/' . $item->image)); ?> " alt="Logo"
                                    class="d-inline-block align-text-top">
                            </div>
                            <div class="list_text">
                                <h4 class="list_h4"><b><?php echo e($item->title); ?></b></h4>
                                <p class="list_p">
                                    <?php echo e($item->subtitle); ?>

                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->id == 13): ?>
                        <div class="list-row">
                            <div class="list_gmb">
                                <img src="<?php echo e(asset('gambar/' . $item->image)); ?> " alt="Logo"
                                    class="d-inline-block align-text-top">
                            </div>
                            <div class="list_text">
                                <h4 class="list_h4"><b><?php echo e($item->title); ?></b></h4>
                                <p class="list_p">
                                    <?php echo e($item->subtitle); ?>

                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="list_kiri">
                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->id == 10): ?>
                        <div class="list-row">
                            <div class="list_gmb">
                                <img src="<?php echo e(asset('gambar/' . $item->image)); ?> " alt="Logo"
                                    class="d-inline-block align-text-top">
                            </div>
                            <div class="list_text">
                                <h4 class="list_h4"><b><?php echo e($item->title); ?></b></h4>
                                <p class="list_p">
                                    <?php echo e($item->subtitle); ?>

                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->id == 12): ?>
                        <div class="list-row">
                            <div class="list_gmb">
                                <img src="<?php echo e(asset('gambar/' . $item->image)); ?> " alt="Logo"
                                    class="d-inline-block align-text-top">
                            </div>
                            <div class="list_text">
                                <h4 class="list_h4"><b><?php echo e($item->title); ?></b></h4>
                                <p class="list_p">
                                    <?php echo e($item->subtitle); ?>

                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $data_getlink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->id == 14): ?>
                        <div class="list-row">
                            <div class="list_gmb">
                                <img src="<?php echo e(asset('gambar/' . $item->image)); ?> " alt="Logo"
                                    class="d-inline-block align-text-top">
                            </div>
                            <div class="list_text">
                                <h4 class="list_h4"><b><?php echo e($item->title); ?></b></h4>
                                <p class="list_p">
                                    <?php echo e($item->subtitle); ?>

                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>



    <!-- <div class="bungkus">
    <div class="container1">
      <div class="body_fitur">
        <div class="fitur_container">
          <div class="fitur_row">
            <div class="fitur_column" style="margin-left: 15px">
              <div class="fitur_section">
                <div class="image_fitur">
                  <img src=" assets_landing_page/img/Gears copy.png" alt="Logo" class="d-inline-block align-text-top">
                </div>
                <div class="fitur_text">
                  <h4>Mudah Digunakan</h4>
                  <p>
                    Tanpa perlu coding sedikitpun untuk membuat
                    website dan microsite anda.
                  </p>
                </div>
              </div>
            </div>
            <div class="fitur_column" style="margin-left: 15px">
              <div class="fitur_section">
                <div class="image_fitur">
                  <img src=" assets_landing_page/img/People_list.png" alt="Logo" class="d-inline-block align-text-top">
                </div>
                <div class="fitur_text">
                  <h4>10.000 + Pengguna</h4>
                  <p>
                    Lebih dari 10.000 pengguna dari segala
                    penjuru dunia.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="fitur_row">
            <div class="fitur_column" style="margin-left: 15px">
              <div class="fitur_section">
                <div class="image_fitur">
                  <img src=" assets_landing_page/img/Infinity.png" alt="Logo" class="d-inline-block align-text-top">
                </div>
                <div class="fitur_text">
                  <h4>Tanpa Batas</h4>
                  <p>
                    Tidak ada batasan apapun untuk link
                    anda.
                  </p>
                </div>
              </div>
            </div>
            <div class="fitur_column" style="margin-left: 15px">
              <div class="fitur_section">
                <div class="image_fitur">
                  <img src=" assets_landing_page/img/Link.png" alt="Logo" class="d-inline-block align-text-top">
                </div>
                <div class="fitur_text">
                  <h4>1M + Links Shorten</h4>
                  <p>
                    Jutaan Link telah dipendekkan.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="fitur_row">
            <div class="fitur_column" style="margin-left: 15px">
              <div class="fitur_section">
                <div class="image_fitur">
                <img src=" assets_landing_page/img/lightning bold.png" alt="Logo" class="d-inline-block align-text-top">
              </div>
              <div class="fitur_text">
                <h4>Cepat</h4>
                <p>
                  Kecepatan dalam membangun dan
                  mengakses link maupun website anda.
                </p>
              </div>
            </div>
          </div>
          <div class="fitur_column" style="margin-left: 15px">
            <div class="fitur_section">
              <div class="image_fitur">
                <img src=" assets_landing_page/img/Account.png" alt="Logo" class="d-inline-block align-text-top">
              </div>
              <div class="fitur_text">
                <h4>Manajemen Link</h4>
                <p>
                  Sangat mudah dan praktis dalam
                  memanajemen dan mengakses seluruh
                  link anda.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->


    <!-- footer -->

    <div class="almost_footer">
        <img class="foot_arrow" src="<?php echo e(asset('assets_landing_page/img/Vector 10.png')); ?>" alt="">
        <div class="fotBung">
            <div class="box_foot_kiri">
                <div class="info">
                    <div class="satu">
                        <div class="image_footer me-2">
                            <img src="<?php echo e(asset('assets_landing_page/img/dunia.png')); ?>" alt="Logo"
                                class="bg-white rounded-circle">
                        </div>
                        <p>Jl.Anggrek No.200 Cepokomulyo <br> Kepanjen, Malang</p>
                    </div>
                    <div class="dua">
                        <div class="image_footer me-2">
                            <img src="<?php echo e(asset('assets_landing_page/img/telpon2.png')); ?>" alt="Logo"
                                class="bg-white rounded-circle">
                        </div>
                        <p>+62 851-7332-1203</p>
                    </div>
                    <div class="tiga">
                        <div class="image_footer me-2">
                            <img src="<?php echo e(asset('assets_landing_page/img/pesan.png')); ?>" alt="Logo"
                                class="bg-white rounded-circle">
                        </div>
                        <p>getaplikasi@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="box_foot_tengah">
                <p class="foot_p1">Quick link</p>
                <p class="foot_p2">Our Teams</p>
                <p class="foot_p3">Our Partners</p>
            </div>
            <div class="box_foot_kanan">
                <p class="foot_lokasi">Lokasi</p>
                <a href="https://goo.gl/maps/qTAXqypjJpA9Jxxo9" target="_blank">
                    <img class="foot_lokasu_img" src="<?php echo e(asset('assets_landing_page/img/map2.png')); ?>"
                        alt="" style="width:300px;border-radius: 5px;"></a>
            </div>
        </div>
        
        <div class="foot_footer">
            <div class="foot_copyright">
                <p class="text-white">© 2023 Copyright : </p>
                <a class="text-white" href="https://mdbootstrap.com/"><b>Get Aplikasi Indonesia</b></a>
            </div>
            <div class="social_media">
                <div class="social_box"><img src="<?php echo e(asset('assets_landing_page/img/Vector (2).png')); ?>"
                        alt=""></div>
                <div class="social_box"><img src="<?php echo e(asset('assets_landing_page/img/Vector (3).png')); ?>"
                        alt=""></div>
                <div class="social_box"><img src="<?php echo e(asset('assets_landing_page/img/Vector (4).png')); ?>"
                        alt=""></div>
                <div class="social_box"><img src="<?php echo e(asset('assets_landing_page/img/Vector (5).png')); ?>"
                        alt=""></div>
            </div>
        </div>
    </div>


    <!-- <div class="footer text-white">

    <footer class="text-center text-lg-start mt-xl-5">

      <div class="container p-1">

        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <ul class="list-unstyled mb-4">
              <li class="d-flex">
                <div class="image_footer me-2">
                  <img src=" assets_landing_page/img/dunia.png" alt="Logo" class="bg-white rounded-circle">
                </div>
                <p class="text-white">   21 Revolution Street
                  <b>Paris,France</b>
                </p>
              </li>
              <li class="d-flex">
                <div class="image_footer me-2">
                  <img src=" assets_landing_page/img/telpon2.png" alt="Logo" class="bg-white rounded-circle">
                </div>
                <p class="text-white">
                  <b>+62 851-8806-9007</b>
                </p>
              </li>
              <li class="d-flex">
                <div class="image_footer me-2">
                  <img src=" assets_landing_page/img/pesan.png" alt="Logo" class="bg-white rounded-circle">
                </div>
                <p class="text-white">
                  <b>user@gmail.com</b>
                </p>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-white"> </a>
              </li>
              <li>
                <a href="#!" class="text-white"> </a>
              </li>
              <li>
                <a href="#!" class="text-white"> </a>
              </li>
              <li>
                <a href="#!" class="text-white"> </a>
              </li>
              <li>
                <a href="#!" class="text-white"> </a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <h5 class="text-uppercase mb-4"><b>Quick Link</b></h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-white">Our Teams</a>
              </li>
              <li>
                <a href="#!" class="text-white">Our Partner</a>
              </li>
            </ul>
          </div>
          <div class="maap col-lg-3 col-md-6 mb-lg-0">
            <h5 class="text-uppercase mb-4"><b>Lokasi</b></h5>
            <div class="image_fitur">
            </div>
          </div>
        </div>
      </div>


      <div class="text-left p-3 border-top border-white">
        © 2023 Copyright :
      <a class="text-white" href="https://mdbootstrap.com/"><b>Get Aplikasi Indonesia</b></a>
      </div>

    </footer>
  </div> -->

    <script>
        grecaptcha.ready(function() {
            grecaptcha.excute('', {
                action: 'contact'
            }).then(function(token) {
                if (token) {
                    document.getElementById('response').value = token;
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const jsonAPI = "Backend_Copy.postman_collection.json";

        fetch(jsonAPI)
            .then(function(response) {
                return response.json();
            })
            .then(function(obj) {
                console.log(obj);
            })
            .catch(function(error) {
                console.error('Someting went wrong');
                console.error(error);
            })

        const endPoint = "<?php echo e(asset('')); ?> assets_landing_page"
        const buttonImage = document.getElementById("image_link");
        const submitButton = document.getElementById("button_link");


        var newButton = document.createElement("button");
        newButton.id = "button_copy";
        newButton.type = "button";

        var img = document.createElement("img");
        img.id = "image_copy";
        onclick = "copy_clip()"
        img.src = "<?php echo e(asset('assets_landing_page/img/copy.png')); ?> ";

        newButton.appendChild(img);
        document.body.appendChild(newButton);

        const copyButton = document.getElementById("button_copy");

        function validateLink(link) {
            var pattern = /^https?:\/\/[^\s/$.?#].[^\s]*$/i;
            return pattern.test(link);
        }

        submitButton.addEventListener("click", function(e) {
            e.preventDefault();
            const inputElement = document.getElementById("input_link");
            const link = inputElement.value.trim();


            if (validateLink(link)) {
                // Mengirimkan data ke server menggunakan AJAX
                var url_shortener = "<?php echo e(route('generate.shorten.link.post')); ?>";
                $.ajax({
                    type: 'POST',
                    url: url_shortener,
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
                        link: link,
                    },
                    success: function(response) {
                        $('#input_link').val("<?php echo e(env('APP_URL')); ?>" + "/" + response.short_link);

                        // Menampilkan tombol copy dan refresh
                        if (buttonImage.src.includes("Refresh.png")) {
                            buttonImage.src = "<?php echo e(asset('assets_landing_page/img/Add-Link.png')); ?> ";
                            newButton.parentNode.removeChild(newButton);
                            submitButton.style.marginLeft = "10px";
                            inputElement.value = "";

                        } else {
                            buttonImage.src = "<?php echo e(asset('assets_landing_page/img/Refresh.png  ')); ?> ";
                            submitButton.style.marginLeft = "20px";
                            inputElement.parentNode.insertBefore(newButton, inputElement.nextSibling);

                        }

                        // Mengubah nilai atribut href dan text dari tombol copy
                        // copyButton.href = $('#input_link').val();
                        // copyButton.textContent = $('#input_link').val();

                        // Menambahkan event listener pada tombol copy
                        copyButton.addEventListener("click", function() {
                            // document.getElementById("input_link").val().select();
                            // document.execCommand("copy");
                            // const kecap = document.getElementById("cakecap")
                            // kecap.style.display = "none";
                            const inputElement = document.getElementById("input_link");
                            inputElement.select();
                            document.execCommand("copy");
                            // alert("berhasil copy!");
                            // success.function (response) {
                            swal.fire({
                                icon: 'success',
                                title: 'berhasil',
                                timer: 800
                            });
                            // }

                            // Menampilkan pesan "Berhasil copy" pada elemen span selama 5 detik
                            // copyMsg.style.display = "inline";
                            // copyMsg.textContent = "Berhasil copy";
                            // setTimeout(function() {
                            //     copyMsg.style.display = "none";
                            // }, 5000);
                        });
                    },
                    error: function() {
                        alert("Terjadi kesalahan saat mempersingkat link!");
                    }
                });
            } else {
                alert("Input tidak valid!");
                return;
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH D:\FrondEnd\quest\GetLink_lain\Getlink_New5\resources\views/Home/landing_page.blade.php ENDPATH**/ ?>