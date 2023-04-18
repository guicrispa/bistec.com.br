<?php include('templates/header.php'); ?>
    <!-- <head>
        <link rel="stylesheet" href="./assets/css/styleSuporte.css"> 
    </head> -->
    <article id="first_section">
        <!-- banner -->
        <section class="bistec-suporte">
            <h1>Suporte Técnico</h1>
            <p>Este canal é exclusivo para clientes de contrato.</p>
            <p>Helpdesk on-line aberto de <strong>segunda à sexta</strong>, das <strong>8:15h às 18:00h.</strong></p>
            <p>Caso a sua empresa ainda não seja parceira, fale conosco!
            </p>
            <p>Faça Download do Anydesk!</p>
                <a href="https://download.anydesk.com/AnyDesk.exe" class="bt-dialog-anydesk">DOWNLOAD ANYDESK</a>                   
            
            <p>Faça Download do TeamViewer!</p>
                <a class="bt-dialog-teamviewer" href="http://download.teamviewer.com/download/TeamViewerQS_pt.exe">DOWNLOAD TEAMVIEWER</a>                   

            <p>Fale conosco também pelo <strong><a class="suporte-wpp" href="https://api.whatsapp.com/send?phone=5513992101945" target="_blank">WhatsApp Business no +55 13 4042-0777</a></strong> ou pelo <strong><a href="https://t.me/BISTEC_BOT" target="_blank" class="suporte-telegram">Telegram – Procure por Atendimento BISTEC.</a></strong> </p>

            <p>Realize uma análise completa da qualidade da sua conexão com a Internet utilizando o medidor SIMET. Clique no botão medir</p>
            <p style="text-align: center"><iframe src="https://beta.simet.nic.br/widget.html" height="780" width="430" style="border:none"></iframe></p>
        </section>
    </article>
<?php include('templates/footer.php'); ?>

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