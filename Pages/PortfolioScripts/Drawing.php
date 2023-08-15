<script>

    $('#drawings1').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Drawings/godlyBeingsOld.jpg',
                title: 'Godly Beings original drawing'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#drawings2').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Drawings/fantasyPortrait.jpg',
                title: 'Fantasy portrait'
            },
            {
                src: '../../Resources/images/Drawings/fantasyPortrait1.jpg',
                title: 'Fantasy portrait'
            },
            {
                src: '../../Resources/images/Drawings/fantasyPortrait2.jpg',
                title: 'Fantasy portrait'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#drawings3').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Drawings/techThemeCom.jpg',
                title: 'Tech-themed commission'
            },
            {
                src: '../../Resources/images/Drawings/techThemeCom1.jpg',
                title: 'Tech-themed commission'
            },
            {
                src: '../../Resources/images/Drawings/techThemeCom2.jpg',
                title: 'Tech-themed commission'
            },
            {
                src: '../../Resources/images/Drawings/techThemeCom3.jpg',
                title: 'Tech-themed commission'
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