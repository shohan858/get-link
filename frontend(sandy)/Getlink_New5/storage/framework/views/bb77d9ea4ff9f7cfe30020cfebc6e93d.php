<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
  
  
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://img.freepik.com/free-vector/programer-learning-programming-languages-by-computer-laptop-website-tutorial-channel-online-education-class-vector-illustration-software-development-programming-languages-learning_1150-55428.jpg?size=626&ext=jpg&ga=GA1.1.20717073.1659496127&semt=sph"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form  action="/sesi/login" method="POST">
          <?php echo csrf_field(); ?>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Alamat Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Kata Sandi</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3">Ingat Saya ?</label>
            </div>
            
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Masuk</button>
          <p class="small fw-bold mt-2 pt-1 mb-0">Belum Punya Akun ? 
                    <a href="/register" class="link-danger">Daftar</a></p>

          <div class="divider text-center d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">Atau</p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
    
</body>
</html>
<?php /**PATH D:\FrondEnd\Getlink_New\resources\views/sesi/index.blade.php ENDPATH**/ ?>