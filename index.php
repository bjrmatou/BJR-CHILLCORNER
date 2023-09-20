<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="bjrmatou's digital shelf/messy dump/personal netflix but you can't stream anything, I just give my unsollicited advice on random things I consume during my free time... Anyway - call it whatever you want. This is a non-exhaustive list of the things I like.">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>BJRCHILLCORNER</title>
</head>


<body>

    <header>
        <?php include('header.php'); ?>
    </header>

    <main>

        <div class="main-container">

            <div class="container-box">
                <h3 class="bloc-title">WATCHING</h3>
                <div class="bloc-cont">
                <?php include ('watching.php')?>
                <?php foreach($watching as $watchcard) : ?>
                    <article class="bjr-card">
                        <div class="card-img"><?php echo $watchcard['image']; ?></div>
                        <h5><?php echo $watchcard['titre']; ?></h5>
                        <p><?php echo $watchcard['description']; ?></p>
                        <div class="card-rating"><?php echo $watchcard['note']; ?></div>
                    </article>
                <?php endforeach ?>
                </div>
            </div>

            <div class="container-box">
                <h3 class="bloc-title">READING</h3>
                <div class="bloc-cont">
                <?php include ('reading.php')?>
                <?php foreach($reading as $readcard) : ?>
                    <article class="bjr-card">
                        <div class="card-img"><?php echo $readcard['image']; ?></div>
                        <h5><?php echo $readcard['titre']; ?></h5>
                        <p><?php echo $readcard['description']; ?></p>
                        <div class="card-rating"><?php echo $readcard['note']; ?></div>
                    </article>
                <?php endforeach ?>
                </div>
            </div>

            <div class="container-box">
                <h3 class="bloc-title">PLAYING</h3>
                <div class="bloc-cont">
                <?php include ('playing.php')?>
                <?php foreach($playing as $playcard) : ?>
                    <article class="bjr-card">
                        <div class="card-img"><?php echo $playcard['image']; ?></div>
                        <h5><?php echo $playcard['titre']; ?></h5>
                        <p><?php echo $playcard['description']; ?></p>
                        <div class="card-rating"><?php echo $playcard['note']; ?></div>
                    </article>
                <?php endforeach ?>
                </div>
            </div>

        </div>

    </main>

    <footer>
        <?php include('footer.php'); ?>
    </footer>

</body>
</html>