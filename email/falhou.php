<?php include('../templates/headeralternative.php'); ?>
<article id="first_section">
    <section class="email-enviado">
        <h1>Email Falhou</h1>
        <p>Pode ser que estejamos com algum problema...</p>
        <p>Mas tentamos enviar uma email para o endereço ... </p>
        <p>Se o e-email estiver correto, tente nos contatar de outras formas. Mais informações no rodapé da página.</p>
        <ion-icon name="thumbs-down" id="ionicEmailFalhou"></ion-icon>
    </section>
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
<script src="/js/menu.js" defer async></script>