<?php include('../templates/headeralternative.php'); ?>
<!-- CORPO -->
    <article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-edu-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
        <div class="produto-texto">
            <h1>Bistec Edu</h1>
            <p>
                Faça o treinamento com toda a sua equipe e explore 100% da capacidade das soluções Bistec.
            </p>

            <p>
                Temas (Treinamentos em informática e de desenvolvimento profissional e gerencial).
            </p>

            <p>
                Modalidades (Treinamentos presenciais no nosso Showroom ou na sua empresa e Treinamentos a distância, utilizando a plataforma Bistec Edu).
            </p>

            <p>
                Formadores (Equipe de consultores técnicos. Contamos ainda com profissionais com mais de 25 anos de experiência acadêmica).
            </p>

            <p>
                Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945&text=Ol%C3%A1,%20estou%20com%20uma%20d%C3%BAvida%20sobre%20a%20solu%C3%A7%C3%A3o%20Bistec%20Edu">Converse com um de nossos atendentes sobre a solução BISTEC Edu.</a>
            </p>

            <h2>
                Acesso aos nossos recursos de formação:
            </h2>

            <div class="bistec-edu-plataformas">
                <a href="https://edu.bistec.com.br/ead/login/index.php" target="_blank"><img src="https://ik.imagekit.io/bistecbr/img-lg-bistec-edu.png" alt="Bistec Edu"></a>
                <a href="https://edu.bistec.com.br/ead/login/index.php" target="_blank"><img src="https://ik.imagekit.io/bistecbr/img-lg-bistec-edu-branco.png" alt="Bistec Edu"></a>
                <a href="https://www.youtube.com//BISTECEDU?sub_confirmation=1" target="_blank"><img src="https://ik.imagekit.io/bistecbr/youtube.png" alt="Canal do YouTube da Bistec Edu"></a>
                <a href="https://www.youtube.com//BISTECEDU?sub_confirmation=1" target="_blank"><img src="https://ik.imagekit.io/bistecbr/youtube_white.png" alt="Canal do YouTube da Bistec Edu"></a>
            </div>
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