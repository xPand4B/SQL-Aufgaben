<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sample</title>

        <!-- Styles -->
        <link rel="stylesheet" href="../../css/bootstrap.min.css">

        <!-- Javascript -->
        <script src="../../js/jquery-3.3.1.min.js"></script>
        <script src="../../js/bootstrap.bundle.min.js"></script>
        <script src="../../js/popper.min.js"></script>
        <script src="../../js/fontawesome-all.min.js"></script>
    </head>
    <body>
        
        <?php 
            include './_topnav.html';
            include '../../database.php'; 

            $DB = new Database();
            ?>

        <div class="container mb-5 pb-5">
            <?php 
                $dir = './';
                $files = scandir($dir);

                foreach($files as $file){
                    if($file != '.' && $file != '..' && $file != '_topnav.html' && $file != 'index.php'){
                        echo '<div class="mb-5"></div>';
                        include $dir . $file;
                        echo '<a name="' . substr($file, 0, 9) . '"></a>';
                    }
                }
            ?>
        </div>

    </body>
</html>