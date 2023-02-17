<?php include('templates/header.php'); ?>
    <article id="first_section">
        <!-- banner -->
        <section class="bistec_tour_page">
            <h1>Tour Virtual - Como somos por dentro?</h1>
            <p>
                Faça um tour virtual dentro do nosso novo escritório e conheça o quartel general da Bistec.
            </p>
            <p>
                Imagens fornecidas por <strong>ARV360° Realidade Virtual.</strong>
            </p>

            <p>
            <!-- <iframe src="https://www.google.com/maps/@-23.9369261,-46.3219861,3a,75y,251.37h,62.1t/data=!3m6!1e1!3m4!1sAF1QipO-49G0q0-61WuB2NaHlb17WGvDt8Mfpu-U-m8!2e10!7i7220!8i3610" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                <!--<iframe width="600" height="450" frameborder="0" style="border:0" allowfullscreen="" data-src="https://www.google.com/maps/@-23.9369261,-46.3219861,3a,75y,251.37h,62.1t/data=!3m7!1e1!3m5!1sAF1QipO-49G0q0-61WuB2NaHlb17WGvDt8Mfpu-U-m8!2e10!3e12!7i7220!8i3610" class=" lazyloaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="></iframe> --->

                <iframe title="Tour Bistec" src="https://www.google.com/maps/embed?pb=!4v1672066306128!6m8!1m7!1sCAoSK0FGMVFpcE8tNDlHMHEwLTYxV3VCMk5hSGxiMTdXR3ZEdDhNZnB1LVUtbTg.!2m2!1d-23.93692612622863!2d-46.32198605686426!3f220!4f0!5f0.7820865974627469" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
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
