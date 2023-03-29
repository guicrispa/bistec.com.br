<?php
    session_start();
    $emailR = $_SESSION['emailRemetente'];

    if(isset($emailR) && !empty($emailR) && $_SESSION['falha']){
?>
<!DOCTYPE html>
<?php include('../templates/headeralternative.php'); ?>

        <!-- corpo -->
        <article id="first_section">
            <section class="email-enviado">
                <h1>E-mail não foi enviado</h1>
                <p>Pode ser que estejamos com algum problema...</p>
                <p>Mas tentamos enviar uma email para o endereço <b><?php echo $emailR?></b> e não tivemos sucesso.</p>
                <p>Se o e-email estiver correto, tente nos contatar de outras formas.</p>
                <p>Nosso e-mail é bistec@bistec.com.br</p>     
                <p>Mais informações no rodapé da página</p>
                <ion-icon name="thumbs-down" id="ionicEmailFalhou"></ion-icon>
            </section>
        </article>
<script src="../assets/js/main.js" defer async></script>
        <script>
            function headerDone() {
                var header = document.querySelector("header");
                
                if(window.matchMedia("(min-width: 769px").matches){
                    header.classList.toggle("sticky");
                    let imageLogo = document.querySelector('.logoImg')
                    imageLogo.removeAttribute('src');
                    imageLogo.setAttribute('src',`https://ik.imagekit.io/bistecbr/logo-bistec.png`);
                }
            }
            headerDone();
        </script>
<?php
    // Manter comentado para testes de layout, tirar comentário em produção, para cancelar a sessão ao recarregar a página
    // session_destroy();
    }else{
        session_destroy();
        header('location: ../index.html');
    }
?>