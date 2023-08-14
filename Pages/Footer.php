<!-- JSON scripts -->

<!-- custom js -->
<script src = "../JS/script.js"></script>
<!-- Jquery js -->
<script src="../JS/jquery-3.6.4.js"></script>
<!-- Bootstrap js -->
<script src="../Bootstrap/js/bootstrap.min.js"></script>
<!-- Magnific Popup js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- View popup ID's for homepage -->
<script src="../JS/popup.js"></script>
<!-- View popup carousel ID's for portfolio -->
<?php require ("PortfolioScripts/Digital.php")?>


<!-- portfolio stuff -->
<script>
    $(document).ready(function(){

        $('.buttons').click(function(){

            $(this).addClass('active').siblings().removeClass('active');

            var filter = $(this).attr('data-filter')

            if(filter == 'all'){
                $('.image').show(400);
            }else{
                $('.image').not('.'+filter).hide(200);
                $('.image').filter('.'+filter).show(400);
            }

        });

        $('.portfolio').magnificPopup({

            delegate:'a',
            type:'image',
            gallery:{
                enabled:false
            }

        });
    });
</script>

</body>
<footer>
    <div class="footer-container container">
    <!-- Links to other social medias -->

    <div class="col-md-6">
        <h2>Contact me</h2>
        <li class="social-btn">
            <p><a class="btn-link"  href="https://www.instagram.com/adxla.kurxits/"><img width="30px" alt="Instagram" src="../../Resources/icons/icons8-instagram-64.png"/>Instagram</a></p>
        </li>
        <li class="social-btn">
            <p><img width="30px" alt="Email" src="../../Resources/icons/icons8-email-64.png"/>kurvitsadela@gmail.com</p>
        </li>
    </div>
    <p class="text-end">Created by: Eva-Kristina Vesiallik</p>
    </div>
</footer>
</html>