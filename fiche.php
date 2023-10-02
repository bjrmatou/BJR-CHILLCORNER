<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="bjrmatou's digital shelf/messy dump/personal netflix but you can't stream anything, I just give my unsollicited advice on random things I consume during my free time... Anyway - call it whatever you want. This is a non-exhaustive list of the things I like.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylefiche.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>BJR-CHILLCORNER</title>
</head>


<body>

    <header>
        <?php include('header.php'); ?>
    </header>

    <main>
        <div class="fiche-maincont">
            <div class="cont-inline">
            <?php include ('watching.php')?>
            <?php include ('playing.php')?>
            <?php include ('reading.php')?>
            <?php foreach($watching as $watchcard) : ?>
                <?php if (array_key_exists('id', $watchcard) && $watchcard['id'] == $_GET['id']): ?>

                <div class="fiche-img">
                    <?php echo $watchcard['image']; ?>
                </div>

                <div class="fiche-contenu">

                    <h3><?php echo $watchcard['titre']; ?></h3>

                    <div class="fiche-rating">
                            <?php if (array_key_exists('note', $watchcard) && $watchcard['note'] == '1/5'): ?>
                                ★<span class="star-grey">★★★★</span>
                            <?php endif; ?>
                            <?php if (array_key_exists('note', $watchcard) && $watchcard['note'] == '2/5'): ?>
                                ★★<span class="star-grey">★★★</span>
                            <?php endif; ?>
                            <?php if (array_key_exists('note', $watchcard) && $watchcard['note'] == '3/5'): ?>
                                ★★★<span class="star-grey">★★</span>
                            <?php endif; ?>
                            <?php if (array_key_exists('note', $watchcard) && $watchcard['note'] == '4/5'): ?>
                                ★★★★<span class="star-grey">★</span>
                            <?php endif; ?>
                            <?php if (array_key_exists('note', $watchcard) && $watchcard['note'] == '5/5'): ?>
                                ★★★★★
                            <?php endif; ?>
                    </div>

                    <p>
                        resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume
                    </p>

                    <div class="fiche-avis">
                        avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis 
                    </div>

                </div>

                <?php endif; ?>
            <?php endforeach ?>


            <?php foreach($reading as $readcard) : ?>
                <?php if (array_key_exists('id', $readcard) && $readcard['id'] == $_GET['id']): ?>

                <div class="fiche-img">
                    <?php echo $readcard['image']; ?>
                </div>

                <div class="fiche-contenu">

                    <h3><?php echo $readcard['titre']; ?></h3>

                    <div class="fiche-rating">
                            <?php if (array_key_exists('note', $readcard) && $readcard['note'] == '1/5'): ?>
                                ★<span class="star-grey">★★★★</span>
                            <?php endif; ?>
                            <?php if (array_key_exists('note', $readcard) && $readcard['note'] == '2/5'): ?>
                                ★★<span class="star-grey">★★★</span>
                            <?php endif; ?>
                            <?php if (array_key_exists('note', $readcard) && $readcard['note'] == '3/5'): ?>
                                ★★★<span class="star-grey">★★</span>
                            <?php endif; ?>
                            <?php if (array_key_exists('note', $readcard) && $readcard['note'] == '4/5'): ?>
                                ★★★★<span class="star-grey">★</span>
                            <?php endif; ?>
                            <?php if (array_key_exists('note', $readcard) && $readcard['note'] == '5/5'): ?>
                                ★★★★★
                            <?php endif; ?>
                    </div>

                    <p>
                        resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume
                    </p>

                    <div class="fiche-avis">
                        avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis 
                    </div>

                </div>

                <?php endif; ?>
            <?php endforeach ?>


            <?php foreach($playing as $playcard) : ?>
                <?php if (array_key_exists('id', $playcard) && $playcard['id'] == $_GET['id']): ?>

                <div class="fiche-img">
                    <?php echo $playcard['image']; ?>
                </div>

                <div class="fiche-contenu">

                    <h3><?php echo $playcard['titre']; ?></h3>

                    <div class="fiche-rating">
                            <?php if (array_key_exists('note', $playcard) && $playcard['note'] == '1/5'): ?>
                                ★<span class="star-grey">★★★★</span>
                            <?php endif; ?>
                            <?php if (array_key_exists('note', $playcard) && $playcard['note'] == '2/5'): ?>
                                ★★<span class="star-grey">★★★</span>
                            <?php endif; ?>
                            <?php if (array_key_exists('note', $playcard) && $playcard['note'] == '3/5'): ?>
                                ★★★<span class="star-grey">★★</span>
                            <?php endif; ?>
                            <?php if (array_key_exists('note', $playcard) && $playcard['note'] == '4/5'): ?>
                                ★★★★<span class="star-grey">★</span>
                            <?php endif; ?>
                            <?php if (array_key_exists('note', $playcard) && $playcard['note'] == '5/5'): ?>
                                ★★★★★
                            <?php endif; ?>
                    </div>

                    <p>
                        resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume resume
                    </p>

                    <div class="fiche-avis">
                        avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis avis 
                    </div>

                </div>

                <?php endif; ?>
            <?php endforeach ?>

            </div>
        </div>



    </main>

    <footer>
        <?php include('footer.php'); ?>
    </footer>

</body>
</html>