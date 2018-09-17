<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign Up</title>
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/favicon.ico"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/> 
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/style.css"/>
</head>
<body>	

    <nav class="menu">
        <ul>   
            <li><a href="">for employers</a></li>
            <li><a href="">how it works</a></li>
            <li><a href="">inside look</a></li>
            <li><a href="">companies</a></li>
            <li><a href="">jobs</a></li>
            <li><a href="">my dashboard</a></li>
        </ul>
    </nav>
    
    <div class="nav-mobile">
                <a href=""><li>my dashboard</li></a>
                <a href=""><li>jobs</li></a>
                <a href=""><li>companies</li></a>
                <a href=""><li>insade look</li></a>
                <a href=""><li>how it works</li></a>
                <a href=""><li>for employers</li></a>
            </ul>
        </nav>
    </div>

    <i class="fas fa-bars icon-mobile"></i>

    <div style="clear:both;"></div>

    <div class="container">
       <?php $this->loadViewInTemplate($viewName, $viewData); ?>
   </div>

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
</body>
</body>
</html>