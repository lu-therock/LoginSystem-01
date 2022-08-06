<?php
    $loggedIn = false;
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $loggedIn = true;
    }else {
        $loggedIn = false;
    }

    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">iCoder</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link active" href="/LoginSystem/welcome.php">Home</a>
                    </li>';

                    if (!$loggedIn) {
                            echo '<li class="nav-item">
                            <a class="nav-link active" href="/LoginSystem/login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/LoginSystem/signup.php">SignUp</a>
                        </li>';
                    }
                       
                        
                        if($loggedIn){
                            echo '<li class="nav-item">
                            <a class="nav-link active" href="/LoginSystem/logout.php" tabindex="-1">Logout</a>
                            </li>';
                        }
                        
                    
                
                echo '</ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>';
?>
