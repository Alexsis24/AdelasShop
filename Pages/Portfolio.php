<?php
require ("Header.php");
$title = "Portfolio";?>
<body>
<!--Selection-->
<main>
    <section class="py-5">
    <section id="collection">
    <div class="container mt-5">
        <div class="title text-center">
            <h2 class="position-relative d-inline-block">Portfolio</h2>
        </div>

        <div class="collection-list row g-0">
            <div class="filter-button-group d-flex flex-wrap justify-content-center mt-5">
                <button type="button" class="btn btn-primary active-filter-btn m-2" data-filter = "*">All</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".drawings">Drawings</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".felt">Felt</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".murals">Murals</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".paintings">Paintings</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".pins">Pins</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".prints">Prints</button>
                <button type="button" class="btn btn-primary m-2"data-filter = ".stickers">Stickers</button>
            </div>

            <div class="collection-list mt-4 row gx-0 gy-3">
                <div class="col-md6 col-lg-4 col-xl-3 p-2 murals">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../resources/images/SmallerPictures/apollo7.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Apollo</h6>
                    </div>
                </div>
            </div>
            <div class = "col-md-6 col-lg-4 col-xl-3 p-2 drawings">
                <div class = "collection-img position-relative">
                    <img class="w-100" src="../resources/images/SmallerPictures/apollo7.jpg">
                </div>
                <div class="text-center fw-bold my-1">
                    <h6>Apollo</h6>
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
