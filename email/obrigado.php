<?php include('../templates/headeralternative.php'); ?>
<article id="first_section">
    <section class="email-enviado">
        <h1>Formulário Processado</h1>
        <p>Enviamos uma cópia para o endereço ...</p>
        <p>Caso não tenha recebido, pode ter ocorrigo algum problema no envio, tente enviar novame ou entre em contato por outro canal</p>
        <ion-icon name="checkmark-circle-outline"></ion-icon>
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