<!DOCTYPE html>
<html>
<head>
    <title> IEQ BOSQUE </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web\css\all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="images/logoieqsemfundo.png" type="image/x-icon"/>
</head>
<body>
    <section class="topo">
        <div class="center">
        <div class="logo-social">
            <div class="logo"><img src="images/logoieq.png"/></div><!-- logo -->
            <div class="social-icons">
                <a href="https://www.youtube.com/@ieqbosque" target="_blank">
                <i class="fa-brands fa-youtube" style="color: #ffffff; font-size: 21px; margin-right: 17px;"></i>
                </a>
                <a href="https://www.instagram.com/ieqbosque/" target="_blank">
                <i class="fa-brands fa-instagram" style="color: #ffffff; font-size: 21px; margin-right: 17px;"></i>
                </a>
                <a href="https://pt-br.facebook.com/Ieqbosque-1561717103903240/posts/" target="_blank">
                <i class="fa-brands fa-facebook" style="color: #ffffff; font-size: 21px; margin-right: 17px;"></i>
                </a>
                <a href="https://api.whatsapp.com/send?phone=5568992381292" target="_blank">
                <i class="fa-brands fa-whatsapp" style="color: #ffffff; font-size: 21px; margin-right: 17px;"></i>
                </a>
            </div><!-- social-icons -->
            </div><!-- logo-social -->
            <ul class="menu-desktop">
                <li><a href="index.php">Início</a></li>
                <li><a href="cultos.php">Programação</a></li>
                <li><a href="palavras.php">Ao vivo</a></li>
                <li><a href="oracao.php">Pedido de Oração</a></li>
            </ul>
            <div class="menu-mobile"> 
                <i class="fa-solid fa-bars"></i>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="cultos.php">Programação</a></li>
                <li><a href="palavras.php">Ao vivo</a></li>
                <li><a href="oracao.php">Pedido de Oração</a></li>
            </ul>
            </div><!---meu mobile--->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--topo-->

    <section class="programacao-semanal">
        <div class="center">
            <div class='w50 dias-culto'>
                <h2>PROGRAMAÇÃO SEMANAL</h2>
                <p>________________________________________</p>
                <br/>
                <h2>Segunda Feira - Benção do Trabalhador</h2>
                <br/>
                <p>• 06:00 / 13:30</p>
                <br/>
                <h2>Quarta-Feira - Culto de Fé</h2>
                <br/>
                <p>• 08:00 / 12:30 / 19:00 (Culto ao vivo)</p>
                <br/>
                <h2>Sábado - GFQ Bosque</h2>
                <br/>
                <p>• 19:00</p>
                <br/>
                <h2>Domingo - Culto da Família</h2>
                <br/>
                <p>• 08:00 / 18:00 (Culto ao vivo)</p>
                <br/>
                <h2>Espaços</h2>
                <br/>
                <p>• 0 a 1 ano - Berçário</p>
                <br/>
                <p>• 2 a 4 anos - Baby</p>
                <br/>
                <p>• 5 a 9 anos - Kids</p>
                <br/>
                <p>• 10 a 14 anos - Juniores </p>
            </div>
            <h2>NOSSA LOCALIZAÇÃO </h2>
            <br/>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.6322895200647!2d-67.8195635!3d-9.964519899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x917f8d5bacd099af%3A0x431fe3299d4ec304!2sIEQ%20BOSQUE!5e0!3m2!1spt-BR!2sbr!4v1680554958575!5m2!1spt-BR!2sbr" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="clear"></div>
            
        </div>
    </section>

    <section class="sobre-imagens">
        <div class="center">
            <div class="img-sobre">
                <img src="images/ieq4.jpg">
            </div>
            <div class="img-sobre">
                <img src="images/ieq4.jpg">
            </div>
            <div class="img-sobre">
                <img src="images/ieq4.jpg">
            </div>
        </div>
    </section>


    <footer>
        <div class="center">
            <div class="col-footer">
                 <h2>Suporte</h2>
                 <a href="">Contato</a>
                 <a href="">FAQ</a>
            </div>
            <div class="col-footer">
                 <h2>Suporte</h2>
                 <a href="">Contato</a>
                 <a href="">FAQ</a>
            </div>
            <div class="col-footer">
                 <h2>Suporte</h2>
                 <a href="">Contato</a>
                 <a href="">FAQ</a>
            </div>
            <div style="width: 55%;text-align: right;" class="col-footer">
                <img src="images/logoieqpreta.png" alt="Logo da IEQ">
            </div>
        </div>
    </footer>

<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>
<script type="text/javascript">
    $('section.clientes-slider .slider-container').slick({
        dots:true,
        arrows:false,
        infinite: true,
        speed:1000,
        slidesToShow:4,
        autoplay:true,
        centerMode:false,
        autoplaySpeed:2000,
        pausOnHover:false,
        responsive:[
            {
                breakpoint: 768,
                settings:{
                    slidesToShow:4
                }
            }
        ]
    });
    $('section.depoimentos .depoimentos-box').slick({
        dots:true,
        arrows:false,
        infinite: false,
        speed:1000,
        slidesToShow:1,
        centerMode:false,
        
    });
</script>

<script>
    //menu responsivo
    $('.menu-mobile i').click(function(){
        $('.menu-mobile').find('ul').slideToggle();
    })
</script>


</body>
</html>