<script>

    $('#murals1').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Murals/apollo.jpg',
                title: 'Apollo'
            },
            {
                src: '../../Resources/images/Murals/apollo1.jpg',
                title: 'Close-up of snake'
            },
            {
                src: '../../Resources/images/Murals/apollo2.jpg',
                title: 'Close-up of snake'
            },
            {
                src: '../../Resources/images/Murals/apollo3.jpg',
                title: 'Close-up of Apollo'
            },
            {
                src: '../../Resources/images/Murals/apollo4.jpg',
                title: 'Close-up of Apollo'
            },
            {
                src: '../../Resources/images/Murals/apollo5.jpg',
                title: 'Custom Autograph'
            },
            {
                src: '../../Resources/images/Murals/apollo6.jpg',
                title: 'Apollo'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#murals2').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Murals/muralWoman.jpg',
                title: 'Woman mural'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#murals3').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Murals/legendsOfNorway.jpg',
                title: 'Legends of Norway'
            },
            {
                src: '../../Resources/images/Murals/legendsOfNorway1.jpg',
                title: 'Legends of Norway close-up'
            },
            {
                src: '../../Resources/images/Murals/legendsOfNorway2.jpg',
                title: 'Legends of Norway close-up'
            },
            {
                src: '../../Resources/images/Murals/legendsOfNorway3.jpg',
                title: 'Legends of Norway part 2'
            },
            {
                src: '../../Resources/images/Murals/legendsOfNorway4.jpg',
                title: 'Legends of Norway part 2 close-up'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#murals4').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Murals/mysticAncientEgypt.jpg',
                title: 'Mystic ancient Egypt'
            },
            {
                src: '../../Resources/images/Murals/mysticAncientEgypt1.jpg',
                title: 'RA close-up'
            },
            {
                src: '../../Resources/images/Murals/mysticAncientEgypt2.jpg',
                title: 'RA close-up'
            },
            {
                src: '../../Resources/images/Murals/mysticAncientEgypt3.jpg',
                title: 'Close-up'
            },
            {
                src: '../../Resources/images/Murals/mysticAncientEgypt4.jpg',
                title: 'Close-up of pyramid'
            },
            {
                src: '../../Resources/images/Murals/mysticAncientEgypt5.jpg',
                title: 'Close-up of Bastet'
            },
            {
                src: '../../Resources/images/Murals/mysticAncientEgypt6.jpg',
                title: 'Close-up of Bastet'
            },
            {
                src: '../../Resources/images/Murals/mysticAncientEgypt7.jpg',
                title: 'Mystic ancient Egypt view from the side'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#murals5').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Murals/grimmBrothers.jpg',
                title: 'Gathering of the Grimm brothers characters left'
            },
            {
                src: '../../Resources/images/Murals/grimmBrothers1.jpg',
                title: 'Gathering of the Grimm brothers characters middle'
            },
            {
                src: '../../Resources/images/Murals/grimmBrothers2.jpg',
                title: 'Gathering of the Grimm brothers characters right'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#murals6').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Murals/eViiralt.jpg',
                title: 'Collage of the works of Eduard Viiralt'
            },
            {
                src: '../../Resources/images/Murals/eViiralt1.jpg',
                title: 'Process of making the mural'
            },
            {
                src: '../../Resources/images/Murals/eViiralt2.jpg',
                title: 'Collage of the works of Eduard Viiralt left'
            },
            {
                src: '../../Resources/images/Murals/eViiralt3.jpg',
                title: 'Collage of the works of Eduard Viiralt right'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#murals7').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Murals/hendrix.jpg',
                title: 'Jimmy Hendrix murals picture in its last phase'
            },
            {
                src: '../../Resources/images/Murals/hendrix1.jpg',
                title: 'Jimmy Hendrix mural sketch'
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