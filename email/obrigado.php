<?php
    session_start();
    $emailR = $_SESSION['emailRemetente'];

    if(isset($emailR) && !empty($emailR) && !$_SESSION['falha']){
?>
<!DOCTYPE html>
<?php include('../templates/headeralternative.php'); ?>

        <!-- corpo -->
        <article id="first_section">
            <section class="email-enviado">
                <h1>Formulário enviado com sucesso</h1>
                <p>Enviamos uma cópia para o endereço <b><?php echo $emailR?></b></p>
                <p>Caso não tenha recebido, pode ter ocorrido algum problema ao digitar o e-mail, tente enviar novamente ou entre em contato por outro canal</p>
                <p>Nosso e-mail é bistec@bistec.com.br</p>
                <ion-icon name="checkmark-circle-outline"></ion-icon>
            </section>
            
        </article>
        
<?php include('../templates/footer.php'); ?>
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