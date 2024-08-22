<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/global.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <div class="row between">
            <div class="col">
                <div class="wrapper">
              <div class="logo">
              <h3> <a href="/home">MyPhone</a></h3> 
                </div>
                </div>
            </div>
            <div class="col">
                <div class="wrapper">
                    <nav>
                    <ul class='flex'>
                    <?php if (isset($_SESSION['id'])) {
                                foreach ($loggedInMenu as $prop => $val) {
                                    if ($val == 'active') {
                                        print_r("<li><a href='/$prop'>$prop</a></li>");
                                    }
                                }
                            } else {
                                foreach ($loggedOutMenu as $prop => $val) {
                                    if ($val == 'active') {
                                        print_r("<li><a href='/$prop'>$prop</a></li>");
                                    }
                                }
                            } ?>
                    </ul>
                </nav>
                </div>
            </div> 
            <!-- <div class="col">
                <div class="wrapper">
                    <ul class='flex'>
                    <li><a href="/login">Login</a> </li> 
                    <li>/</li>
                    <li><a href="/register">Register</a> </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </header>