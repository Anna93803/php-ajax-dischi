<!-- Stampiamo i dischi solo con l’utilizzo di PHP,
che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->
<?php 
include "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>Disk</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="../img/logo-small.svg" alt="">
        </div>
    </nav>

    <main>
        <div class="bg-main">
            <div class="container">
                <div class="bg-card">
                    <?php 
                    foreach($dbDischi as $disco) { ?>
                        
                        <div class="card">
                            <img src="<?php echo $disco["poster"]?>" alt="">
                            <h4><?php echo $disco["title"]?></h4>
                            <p><?php echo $disco["author"]?></p>
                            <p><?php echo $disco["genre"]?></p>
                            <small><?php echo $disco["year"]?></small>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>