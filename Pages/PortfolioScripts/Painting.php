<script>

    $('#paintings1').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Paintings/foragedMagicOld.jpg',
                title: 'Foraged Magic painting'
            },
            {
                src: '../../Resources/images/Paintings/foragedMagicOld1.jpg',
                title: 'Close-up of the woman'
            },
            {
                src: '../../Resources/images/Paintings/foragedMagicOld2.jpg',
                title: 'Close-up of wreck'
            },
            {
                src: '../../Resources/images/Paintings/foragedMagicOld3.jpg',
                title: 'Close-up of wreck'
            },
            {
                src: '../../Resources/images/Paintings/foragedMagicOld4.jpg',
                title: 'Close-up of mushrooms'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#paintings2').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Paintings/cactiDesert.jpg',
                title: 'Cacti desert'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#paintings3').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Paintings/mushroomForest.jpg',
                title: 'Mushroom forest'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#paintings4').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Paintings/paperPlaneGirl.jpg',
                title: 'Paper plane Girl'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#paintings5').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Paintings/spacecat.jpg',
                title: 'Spacecat 01'
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