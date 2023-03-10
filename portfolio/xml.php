<?php include('../templates/headeralternative.php'); ?>

<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-xml-intro.jpg" alt="Imagem de fundo do produto Bistec Wifi">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
        <div class="produto-texto">
            <h1>Bistec XML</h1>
            <p>
                A Bistec, consolidada no mercado de tecnologia para o comércio e serviços, oferece o kit completo para montar o seu PDV e automatizar as suas vendas.
            </p>
            <p>
                Facilite a sua gestão e as transações com os seus clientes e esteja em dia com a legislação fiscal. Os kits podem conter terminais de venda (teclados inteligentes), leitores de código de barras, relógios de pontos digitais, computadores, etc. Temos também softwares para a automação comercial da sua empresa.
            </p>

            <p>
                Elimine falhas de controle operacional com os relógios de pontos digitais. Com o modelo móvel o controle de ponto dos funcionários pode ser realizado onde eles estiverem.
            </p>
        </div>
    </article>

    <?php include('../templates/footer.php'); ?>
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