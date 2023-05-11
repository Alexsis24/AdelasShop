<?php
require ("Header.php");
$title = "Portfolio";?>
<body>
<!--Selection-->
<main>
    <section class="py-5">
    <section id="collection">
    <div class="container py-5">
        <div class="title text-center">
            <h2 class="position-relative d-inline-block">Portfolio</h2>
        </div>

        <div class="row g-1">
            <div class="d-flex flex-wrap justify-content-center mt-5">
                <button type="button" class="btn btn-primary m-2 active-filter-btn">All</button>
                <button type="button" class="btn btn-primary m-2">Drawings</button>
                <button type="button" class="btn btn-primary m-2">Felt</button>
                <button type="button" class="btn btn-primary m-2">Murals</button>
                <button type="button" class="btn btn-primary m-2">Paintings</button>
                <button type="button" class="btn btn-primary m-2">Pin</button>
                <button type="button" class="btn btn-primary m-2">Prints</button>
                <button type="button" class="btn btn-primary m-2">Stickers</button>
            </div>

            <div class="collection-list mt-4 row gx-1">
                <div class="col-md6 col-lg-4 col-xl-3 p-2">
                    <div class="collection-img position-relative">
                        <img src="../resources/images/SmallerPictures/apollo7.jpg">
                    </div>
                    <div class="text-center my-1">
                        <h6>Apollo</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </section>
<!--End of selection-->
</main>
<?php
require ("Footer.php");?>
