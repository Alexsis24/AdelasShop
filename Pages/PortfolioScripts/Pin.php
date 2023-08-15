<script>

    $('#pins1').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/mushroomPin.jpg',
                title: 'Mushroom pin'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins2').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/feltCatPin.jpg',
                title: 'Felt cat'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins3').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/yinYangCatsPin.jpg',
                title: 'Yin Yang cats pin'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins4').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/jokerCatPin.jpg',
                title: 'Joker cat pin'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins5').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/petPortraitPin.jpg',
                title: 'Pet portrait pin'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins6').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird.jpg',
                title: 'Not Weird pin 1'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins7').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird1.jpg',
                title: 'Not Weird pin 2'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins8').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird2.jpg',
                title: 'Not Weird pin 3'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins9').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird3.jpg',
                title: 'Not Weird pin 4'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins10').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird4.jpg',
                title: 'Not Weird pin 5'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins11').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird5.jpg',
                title: 'Not Weird pin 6'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins12').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird6.jpg',
                title: 'Not Weird pin 7'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins13').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird7.jpg',
                title: 'Not Weird pin 8'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins14').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird8.jpg',
                title: 'Not Weird pin 9'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins15').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird9.jpg',
                title: 'Not Weird pin 10'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins16').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird10.jpg',
                title: 'Not Weird pin 11'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins17').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird11.jpg',
                title: 'Not Weird pin 12'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins18').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird12.jpg',
                title: 'Not Weird pin 13'
            },
        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is a default type
    });
</script>

<script>

    $('#pins19').magnificPopup({
        items: [
            {
                src: '../../Resources/images/Pin/pinNotWeird13.jpg',
                title: 'Not Weird pin 14'
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