<?php include('../templates/headeralternative.php'); ?>
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-green-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
    <div class="produto-texto">
        <h1>Bistec Green</h1>
        <p>
            Adote as melhores práticas de sustentabilidade na infraestrutura de TI da sua empresa.
        </p>
        <p>
            T.I. Verde (Tolond (2012) define TI Verde como uma aplicação eficiente (tamanho e capacidade) de tecnologias inteligentes (que gerenciam o consumo de energia) e tecnologias ecologicamente corretas (eco-friendly) em toda a organização).
        </p>

        <p>
            Práticas (Metodologias sustentáveis aplicadas ao setor de tecnologia da sua empresa).
        </p>

        <p>
            Equipamentos (minimize os impactos negativos trazidos com a operação da infraestrutura de TIC).
        </p>

        <p>
            Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945&text=Ol%C3%A1,%20estou%20com%20uma%20d%C3%BAvida%20sobre%20a%20solu%C3%A7%C3%A3o%20Bistec%20Green">Converse com um de nossos atendentes sobre a solução BISTEC Green</a>
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
    <script src="https://bistec.com.br/assets/js/menu.js" defer async></script>