<?php include('../templates/headeralternative.php'); ?>
<!-- CORPO -->
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-wifi-intro.jpg" alt="Imagem de fundo do produto Bistec Wifi">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
        <div class="produto-texto">
            <h1>Bistec Wifi</h1>
            <p>
                Transforme seu Wifi em uma ferramenta completa de marketing de relacionamento.
            </p>
            
            <p>
                Acesso (Disponibilize a conexão por meio das redes sociais ou e-mail e senha e tenha o controle de quem está acessando sua internet).
            </p>

            <p>
                Segurança (Disponibilize Wifi para o seu cliente isolado do Wifi de uso corporativo, garantindo segurança para seus arquivos).
            </p>

            <p>
                Marketing (Fidelize seus clientes com mensagens de aniversário e promocionais por meio de SMS e WhatsApp).
            </p>
            
            <p>
                * Atende ao Marco Civíl da Internet e a Lei Geral de Proteção de Dados - LGPD.
            </p>

            <p>
                Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945&text=Ol%C3%A1,%20estou%20com%20uma%20d%C3%BAvida%20sobre%20a%20solu%C3%A7%C3%A3o%20Bistec%20Wifi">Converse com um de nossos atendentes sobre a solução BISTEC Wifi.</a>
            </p>
        </div>
    </article>
    <?php include('../templates/footer.php'); ?>
<script src="../assets/js/main.js" defer async></script>
<script>
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        if(window.matchMedia("(min-width: 621px").matches){
            header.classList.toggle("sticky", window.scrollY >= 0)
            if(window.scrollY >= 0){
                let imageLogo = document.querySelector('.logoImg')
                imageLogo.removeAttribute('src');
                imageLogo.setAttribute('src',`https://ik.imagekit.io/bistecbr/logo-bistec.png`);
            }
        }
    })
</script>