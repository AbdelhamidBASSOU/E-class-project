<?php
         session_start();
     if(!isset($_SESSION['username'])){
         header('location:index.php');
       }
       $timern=time()-$_SESSION ['time'];
        if($timern > 30*60){
            // session_start();
            // session_unset();
            // session_destroy();
            header('location:logout.php');
        }
?>
<div class="fond col-auto col-md-3 col-xl-2 px-sm-2 px-0 ">
                <div class="d-flex flex-column align-items-center  px-3 pt-2 text-white min-vh-100">
                    <div class=" mb-3 d-flex justify-content-start">
                        <a class="navbar-brand text-black border-start border-3 border-info px-2 " href="#">E-Classe</a>
                    </div>
                        <img src="https://picsum.photos/70.jpg" alt="Profile"  class="rounded-circle"><br>
                        <p class="text-dark fw-bolder mt-2"><?php echo $_SESSION['username'] ?></p>
                        <p class="text-info font-weight-bold">Admin</p>
                <ul class="my-list nav nav-pills flex-column d-flex justify-content-end " id="menu">
                        <li  class="nav-item mb-2 ps-4"style="width:170px;">
                            <a href="dashbord.php"  class="nav-link px-0 align-middle text-dark ps-4">
                                <i class="fal fa-home-lg-alt "></i> <span class="ms-1 d-none d-sm-inline">Home</span> </a>
                
                        </li>
                        <li  class="nav-item mb-2 ps-4"style="width:170px;">
                            <a href="courses.php"  class="nav-link px-0 align-middle text-dark ps-4">
                                <i class="fal fa-bookmark"></i> <span class="ms-1 d-none d-sm-inline">Cours</span> </a>
                
                        </li>
                        <li  class="nav-item mb-2 ps-4"style="width:170px;">
                            <a href="student.php" class="nav-link px-0 align-middle text-dark ps-4">
                                <i class="fal fa-graduation-cap"></i> <span class="ms-1 d-none d-sm-inline">Students</span></a>
                        </li>
                        <li  class="nav-item mb-2 ps-4"style="width:170px;">
                            <a href="payment.php"  class="nav-link px-0 align-middle text-dark ps-4">
                                <i class="fal fa-usd-square"></i> <span class="ms-1 d-none d-sm-inline">Payments</span></a>
                        </li>
                        <li  class="nav-item mb-2 ps-4"style="width:170px;">
                            <a href="#submenu3"  class="nav-link px-0 align-middle text-dark ps-4">
                                <i class="fal fa-file-chart-line"></i> <span class="ms-1 d-none d-sm-inline">Report</span> </a>
                                
                        </li>
                        <li  class="nav-item mb-2 ps-4"style="width:170px;">
                            <a href="#" class="nav-link px-0 align-middle text-dark ps-4">
                                <i class="fal fa-sliders-v-square"></i></i> <span class="ms-1 d-none d-sm-inline">Settings</span> </a>
                        </li>
                        <li  class="nav-item mb-10 ps-4"style="width:170px;">
                            <a href="logout.php" class="nav-link px-0 align-middle text-dark ps-4">
                             <span class="ms-1 d-none d-sm-inline">Logout</span><i class="fas fa-sign-out-alt px-sm-2"></i> </a>
                        </li>
                </ul>
                 </div>