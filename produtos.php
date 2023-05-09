<?php include('templates/header.php'); ?>
<head>
    <link rel="stylesheet" href="./assets/css/stylePortfolio.css">
</head>
<!-- CORPO -->
    <article id="first_section">
        <!-- banner -->
        <section class="bistec_pag_portfolio">
        <h1 class="tituloportfolio">Portfólio de Produtos</h1>
            <a href="./portfolio/automacao.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-automacao-intro.jpg" alt="Imagem de fundo do produto Bistec Automação">
            </a>
            <a href="./portfolio/cloud.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-cloud-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            </a>
            <a href="./portfolio/edu.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-edu-intro.jpg" alt="Imagem de fundo do produto Bistec Edu">
            </a>
            <a href="./portfolio/ged.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-ged-intro.jpg" alt="Imagem de fundo do produto Bistec GED">
            </a>
            <a href="./portfolio/green.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-green-intro.jpg" alt="Imagem de fundo do produto Bistec Green">
            </a>
            <a href="./portfolio/lgpd.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-lgpd-intro.jpg" alt="Imagem de fundo do produto Bistec LGPD">
            </a>
            <a href="./portfolio/msp.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-msp-intro.jpg" alt="Imagem de fundo do produto Bistec MSP">
            </a>
            <a href="./portfolio/outsourcing.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-outsourcing-intro.jpg" alt="Imagem de fundo do produto Bistec Outsourcing">
            </a>
            <a href="./portfolio/pay.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-pay-intro.jpg" alt="Imagem de fundo do produto Bistec Pay">
            </a>
            <a href="./portfolio/renting.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-renting-intro.jpg" alt="Imagem de fundo do produto Bistec Renting">
            </a>
            <a href="./portfolio/sign.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-sign-intro.jpg" alt="Imagem de fundo do produto Bistec Sign">
            </a>
            <a href="./portfolio/soft.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-soft-intro.jpg" alt="Imagem de fundo do produto Bistec Soft">
            </a>
            <a href="./portfolio/voip.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-voip-intro.jpg" alt="Imagem de fundo do produto Bistec Voip">
            </a>
            <a href="./portfolio/wifi.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-wifi-intro.jpg" alt="Imagem de fundo do produto Bistec Wi-fi">
            </a>
            <a href="./portfolio/xml.php">
                <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-xml-intro.jpg" alt="Imagem de fundo do produto Bistec XML">
            </a>           
        </section>        
    </article>

    <?php include('templates/footer.php'); ?>

    <script>
        function headerDone() {
            var header = document.querySelector("header");
            if(window.matchMedia("(min-width: 621px").matches){
            	header.classList.toggle("sticky");
            	let imageLogo = document.querySelector('.logoImg')
            	imageLogo.removeAttribute('src');
            	imageLogo.setAttribute('src',`https://ik.imagekit.io/bistecbr/logo-bistec.png`);
		    }
        }
        headerDone();
    </script>
    <script src="/js/menu.js" defer async></script>