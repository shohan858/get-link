<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>


    <div class="adContent">
        <aside>
            <div class="adAside">
                <div class="adTop">
                    <img class="adImg" src="<?php echo e(asset('assets/img/logo-text2 1.png')); ?>" alt="image not found">
                </div>
                <div class="adBot">
                    <div class="adComp">
                            <a href="/">  <i  class="fa-solid fa-house"></i>
                                <p>Dashboard</p>
                            </a>                     
                    </div>
                    <div class="adComp">
                        <a href="/halaman_utama">  <i  class="fa-solid fa-house"></i>
                            <p>Halaman Utama</p>
                        </a>              
                    </div>
                    <div class="adComp">
                        <a href="">  <i  class="fa-solid fa-house"></i>
                            <p>Edit Landing Page</p>
                        </a>                  
                    </div>
                    <div class="adComp">
                        <a href="">  <i  class="fa-solid fa-house"></i>
                            <p>Log out</p>
                        </a>                
                    </div>
                </div>
            </div>
        </aside>
      


        <div class="adIs">
            <div class="adNav">
                <div class="adKinav">
                    <h1  style="color:#1A2474">Dashboard</h1>
                    <p>Admin / dashboard</p>
                </div>
                <div class="adKanav">
                    <p>Admin</p>
                    <img src="" alt="">
                </div>
            </div>

            <div class="adCon">
                <div class="adCard1">
                    <p class="adTeCa">MICROSITE</p>
                    <p class="adTeCu1">Microsite</p>
                </div>
                <div class="adCard2">
                    <p class="adTeCa">AKUN USER</p>
                    <p class="adTeCu2">User</p>
                </div>
                <div class="adCard3">
                    <p class="adTeCa">MICROSITE SLOT</p>
                    <p class="adTeCu3">Paket</p>
                </div>
                <div class="adCard4">
                    <p class="adTeCa">BUDGET</p>
                    <p class="adTeCu4">Budget</p>
                </div>
            </div>
        </div>

    </div>

</body>

</html><?php /**PATH D:\FrondEnd\quest\GetLink\halaman_admin\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>