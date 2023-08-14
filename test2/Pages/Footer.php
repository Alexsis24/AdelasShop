<!--Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<!--Magnific Popup js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!--Bootstrap js-->
<script src="../Bootstrap/js/bootstrap.min.js"></script>
<!-- popup stuff .. määra buttonile ID --> 

<script>
    $('#digital1').magnificPopup({
        items: [
            {
                src: '../Resources/images/Digital/foragedMagic.png',
                title: 'Peter & Paul fortress in SPB'
            },
            {
                src: '../Resources/images/Digital/foragedMagic2.jpg',
                title: 'teste3'
            },

        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>
<script>
    $('#digital2').magnificPopup({
        items: [
            {
                src: '../Resources/images/Digital/foragedMagic1.jpg',
                title: 'Peter & Paul fortress in SPB'
            },
            {
                src: '../Resources/images/Digital/foragedMagic3.jpg',
                title: 'teste3'
            },

        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>


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
        <p class="text-end">Created by: Eva-Kristina Vesiallik</p>
</footer>
</html>

