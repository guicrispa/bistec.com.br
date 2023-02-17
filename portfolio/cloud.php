<?php include('../templates/headeralternative.php'); ?>
<!-- CORPO -->
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/produtos/bistec-cloud-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

        <!-- texto produto -->
        <div class="produto-texto">
            <h1>Bistec Cloud</h1>
            <p>
                Guarde os seus arquivos com segurança. Nenhum sistema é 100% seguro, faça BACKUP.
            </p>
            <p>
                Backup (Cópia dos arquivos realizada de forma automática, sem custos de investimentos em infraestrutura).
            </p>
            <p>
                Segurança (Garante a disponibilidade, confidencialidade e integridade dos seus arquivos).
            </p>

            <p>
                Elasticidade (Contrate mais espaço de armazenamento sempre que for necessário).
            </p>

            <p>
                * Atende à lei geral de proteção de dados - LGPD.
            </p>

            <p>
                <a class="nice_button" target="_blank" href="https://bistec.backupmanager.info/">SAIBA MAIS</a>
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