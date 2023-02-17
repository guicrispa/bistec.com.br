<?php include('../templates/headeralternative.php'); ?>
<!-- CORPO -->
    <article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-ged-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

        <!-- texto produto -->
        <div class="produto-texto">
            <h1>Bistec GED</h1>
            <p>
                Armazene seus documentos físicos ou digitais com segurança.
            </p>

            <p>
                Guarda de Documentos (Disponibilizamos nossas caixas para que o cliente guarde seus documentos em sigilo absoluto, as quais são recolhidas já lacradas para a guarda ou de forma gerenciada, modalidade em que o cliente pode escolher com ou sem digitalização).
            </p>

            <p>
                Cadastramento (Os documentos são cadastrados em sistema ficando a disposição do cliente sempre que precisarem. Quando necessário, é possível solicitar a via física ou a digitalizada).
            </p>

            <p>
                fragmentação (Os serviços de fragmentação protegem a privacidade de suas informações destruindo registros e documentos em papel, plásticos e mídia de maneira econômica e segura).	
            </p>

            <p>
                Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945&text=Ol%C3%A1,%20estou%20com%20uma%20d%C3%BAvida%20sobre%20a%20solu%C3%A7%C3%A3o%20Bistec%20Ged">Converse com um de nossos atendentes sobre a solução BISTEC Ged.</a>
            </p>

        </div>
    </article>
<?php include('../templates/footer.php'); ?>
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
    <script src="../assets/js/menu.js" defer async></script>