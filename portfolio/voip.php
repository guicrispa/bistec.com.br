<?php include('../templates/headeralternative.php'); ?>

<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-voip-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
    <div class="produto-texto">
        <h1>Bistec Voip</h1>
        <p>
            Conte com um sistema de telefonia em nuvem que vai além da comunicação por voz.
        </p>
        <p>
            Mobilidade (Receba e realize chamadas de qualquer lugar, por meio de telefones IP ou aplicativos para computadores e smartphones, basta ter conexão à internet).
        </p>

        <p>
            Comunicação (Chamadas de voz, reuniões por vídeo e mensagens de texto).
        </p>

        <p>
            Gerenciamento (Além da emissão de relatórios das ligações recebidas e efetuadas, é possível realizar a gravação, configurar ramais, músicas de espera, atendente virtual e muitas outras funcionalidades).
        </p>

        <p>
            Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945&text=Ol%C3%A1,%20estou%20com%20uma%20d%C3%BAvida%20sobre%20a%20solu%C3%A7%C3%A3o%20Bistec%20Voip">Converse com um de nossos atendentes sobre a solução BISTEC Voip.</a>
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