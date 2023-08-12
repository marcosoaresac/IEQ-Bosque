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
                <li><a href="palavras.php">Palavras</a></li>
                <li><a href="oracao.php">Pedido de Oração</a></li>
            </ul>
            <div class="menu-mobile"> 
                <i class="fa-solid fa-bars"></i>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="cultos.php">Programação</a></li>
                <li><a href="palavras.php">Palavras</a></li>
                <li><a href="oracao.php">Pedido de Oração</a></li>
            </ul>
            </div><!---meu mobile--->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--topo-->
    <!-- topo -->

    <section class="contato">
        <div class="center">
            <div class="w50 contato-form">
                <h1>ENVIE SEU PEDIDO DE ORAÇÃO</h1>
                <h3>Impacto Ousado Amor</h3>
                <br/>
                <form>
                    <input placeholder="Nome" type="text"/>
                    <input placeholder="Telefone" type="text"/>
                    <select>
                        <option value="0">Selecione</option>
                        <option value="1">Criança</option>
                        <option value="2">Teens</option>
                        <option value="3">Jovem</option>
                        <option value="4">Adulto</option>
                    </select>
                    <select>
                        <option value="0">Selecione</option>
                        <option value="1">Prosperidade Financeira</option>
                        <option value="2">Cura divina e saúde</option>
                        <option value="3">Casamento feliz</option>
                        <option value="4">Libertação de vícios</option>
                        <option value="5">Livrar-se da opressão</option>
                        <option value="6">Problemas familiares</option>
                        <option value="7">Promoção de trabalho</option>
                        <option value="8">Problemas na justiça</option>
                        <option value="9">Depressão e desânimo</option>
                        <option value="10">Frieza Espiritual</option>
                        <option value="11">Outros</option>
                    </select>
                    <textarea placeholder="Outros"></textarea>
                    <input type="submit" name="submit" value="Enviar" >
                    
                </form>
            </div>
            <div class="clear"></div>
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
