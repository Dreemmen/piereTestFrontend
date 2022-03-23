<?php define('KEYPASS', '5tgdfg54');?>
<!DOCTYPE html>
<?php
//require './autoleader.php';

//$db = new Database('mysql:host=sql103.000a.biz;dbname=a000b_8448650_piere;charset=utf8mb4;', 'a000b_8448650', 'regularandy13');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tests</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <script type="text/javascript" src="assets/js/theme.js"></script>
    </head>
    <body>
    <div class="wrapper">
        <header class="top-header closed">
            <?php include 'modules/site-menu.php'; ?>
        </header>
            <main>
            <div class="page-tear-up-shadow"></div>
            
            <div class="home-video">
                <div class="play-btn" onclick="var v = document.getElementById('home-video-player');(v.paused)?v.play():v.pause();(this.classList.contains('play-overlay'))?this.classList.remove('play-overlay'):this.classList.add('play-overlay');" /></div>
                <video id="home-video-player">
                    <source src="assets/video/dog_pet_canine_white_sitting_lying_433.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                 </video>
            </div>
            
            <section class="about-project el-single-center">
                <p>SparkleHeart ir biedrība, kas radīta, lai palīdzētu cilvēkiem piepildīt pat pārdrošākos sapņus.
                    Šeit satiekas sapņotāji un viņu atbalstītāji - uzņēmumi, kas sniedz palīdzīgu roku, lai kopā pasauli padarītu par
                labāku vietu mums visiem. Mēs esam gatavi palīdzēt Tev piepildīt sapni.
                Kā pamats iedvesmai - tiek radīti arī 99 stāsti par Latvijas sievietēm.</p>
            </section>
            
            <div class="page-tear-up"></div>
            
            <section class="photo-mosaic">
                <?php 
                $imgs = glob("assets/img/front_mosaic/*");
                foreach($imgs as $index => $img){
                /*
                        $finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type 
                        $fileglob = glob($img);
                        echo finfo_file($finfo, $fileglob);
                        finfo_close($finfo);
                 */
                ?>
                <div class="img img<?=$index;?>" style="background-image: url('<?=$img;?>');"></div>
                <?php }//endforeach ?>
            </section>
            
            <div class="page-tear-down"></div>
            
            <section class="crosroad-btns">
                <div class="wrap">
                    <h2>VĒLIES PIEPILDĪT SAVU SAPNI?</h1>
                    <a href="#" class="btn">Sapņotājiem</a>
                </div>
                <div class="wrap">
                    <h2>VĒLIES PALĪDZĒT KĀDĀM PIEPILDĪT SAPNI?</h1>
                    <a href="#" class="btn">Uzņēmējiem</a>
                </div>
            </section>
            
            <section class="mail-form">
                <h1>SAZINĀTIES AR MUMS</h1>
                <form method="POST">
                    <input name="name" type="text" placeholder="Vārds, Uzvārds*" />
                    <input name="email" type="text" placeholder="E-pasts*" />
                    <input name="phone" type="number" placeholder="Telefons*" />
                    <textarea name="message" rows="10" placeholder="Jautājums, vai komentārs*" ></textarea>
                    <div class="form-notice">* obligāti aizpildāmie lauki</div>
                    <div class="check-row">
                        <input name="agreement" type="checkbox" />
                        <p>Piekrītu, ka mani dati tiks izmantoti likumdošanā noteiktā kārtībā un tiks saglabāti līdz brīdim, kāmēr tas būs nepieciešams.</p>
                    </div>
                    <button name="issubmit" class="submit-btn">Sūtīt</button>
                </form>
            </section>
            
            <div class="page-tear-up"></div>
            
            <section class="supporters">
                <h2>ATBALSTĪTĀJI</h2>
                <div class="supporters-container">
                    <div class="supporter"><img src="assets/img/supporters/teikums.png" alt="Teikums"/></div>
                    <div class="supporter"><img src="assets/img/supporters/sem.png" alt="SEM"/></div>
                    <div class="supporter"><img src="assets/img/supporters/citybee.png" alt="citybee"/></div>
                    <div class="supporter"><img src="assets/img/supporters/linearis.png" alt="Linearis"/></div>
                </div>
                <div id="to_top" class="to_top" onclick="topFunction();"></div>
                <div id="to_top_anchor" style="position: absolute;bottom: 0;right: 0;"></div>
            </section>
        </main>
        <div class="page-tear-dark"></div>
        <footer>
            <?php include 'modules/footer.php'; ?>
        </footer>
    </div>
    </body>
</html>
