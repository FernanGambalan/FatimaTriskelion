<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="http://localhost/triskelion"><img src="assets/img/logos/fatimalogo.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">FATIMA</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">COMMUNITY PROJECT</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">HISTORY</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        
                        <?php if(isset($_SESSION['auth_users'])) : ?>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $_SESSION['auth_users']['usersFullname']; ?>
                                </a>
                                <div class="dropdown-menu bg-dark " aria-labelledby="navbarDropdown">
                                    <a class="nav-link  dropdown-item" href="users/profile.php">Profile</a>
                                    <a class="nav-link  dropdown-item" href="#">MasterList Form</a>
                                    <div class="nav-link dropdown-divider"></div>
                                        <form action="loginform/logoutCode.php" method="post">
                                            <button type ="submit" name="logout_btn" class="nav-link dropdown-item">Logout</button>
                                        </form>
                                    </div>
                        </li>
                        
                        <?php else : ?>
                        <li class="nav-item"><a class="nav-link " href="loginform/register.php">Login</a></li>
                        <?php endif;?>
                    </ul>
                </div>
                
            </div>
        </nav>
<!-- Masthead-->