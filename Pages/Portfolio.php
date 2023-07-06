<?php
require ("Header.php");
$title = "Portfolio";?>

<!--Selection-->
<main>
    <section id="collection" class="py-5">
    <div class="container mt-5">
        <div class="title text-center" style="margin-top: 150px !important;">
            <h2 class="position-relative d-inline-block">Portfolio</h2>
        </div>

        <div class="row g-0">
            <div class="filter-button-group d-flex flex-wrap justify-content-center mt-5">
                <button type="button" class="btn btn-primary active-filter-btn m-2" data-filter = "*">All</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".drawings">Drawings</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".felts">Felt</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".murals">Murals</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".paintings">Paintings</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".pins">Pins</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".prints">Prints</button>
                <button type="button" class="btn btn-primary m-2" data-filter = ".stickers">Stickers</button>
            </div>

            <div class="collection-list m-5 row gx-0 gy-3">
                <!--Drawings-->
                <div class = "bg-body col-md-6 col-lg-4 col-xl-3 p-2 drawings">
                    <div class = "collection-img position-relative">
                        <img class="w-100" src="../Resources/images/Drawings/momentpic.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Cat</h6>
                    </div>
                </div>

                <div class = "bg-body col-md-6 col-lg-4 col-xl-3 p-2 drawings">
                    <div class = "collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/GodlyBeingsOldSmall.png">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Godly beings drawing</h6>
                    </div>
                </div>

                <div class = "bg-body col-md-6 col-lg-4 col-xl-3 p-2 drawings">
                    <div class = "collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/loversSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Lovers drawing</h6>
                    </div>
                </div>

                <div class = "bg-body col-md-6 col-lg-4 col-xl-3 p-2 drawings">
                    <div class = "collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/manSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1"
                        <h6>Man</h6>
                    </div>
                </div>

                <div class = "bg-body col-md-6 col-lg-4 col-xl-3 p-2 drawings">
                    <div class = "collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/DrawingCatSmall3.png">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Lovers drawing</h6>
                    </div>
                </div>

                <!--Felt-->
                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 felts">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/PussPlushSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Octopuss</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 felts">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/CatplantSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>CATtus</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 felts">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/FeltShroomSmall1.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Shroomies</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 felts">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/FeltShroomSmall2.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Shroomies 'n Cacti</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 felts">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/FeltCoversSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Tablet Cover</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 felts">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/FeltPlushSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Plushies</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 felts">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/FeltPlusSmall2.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Big Cat Wizard</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 felts">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/FeltKidSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Kids Onesie</h6>
                    </div>
                </div>

                <!--Murals-->
                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 murals">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/apollo7.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Apollo</h6>
                    </div>
                </div>

                <!--Paintings-->
                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 paintings">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/foragedMagicOldSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Foraged Magic painting</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 paintings">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/WastelandSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Wasteland painting</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 paintings">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/MagicFoxesSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Magic Foxes painting</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 paintings">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/catstronautSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>CATstronaut painting</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 paintings">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/maskedwomanSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Woman painting</h6>
                    </div>
                </div>

                <!--Pins-->
                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 pins">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/PinFeltShroomSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Shroomie felt pin</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 pins">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/PinFeltCatSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Cat felt pin</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 pins">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/FeltCatsSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Cats felt pin</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 pins">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/FeltJackSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Cat Jack pin</h6>
                    </div>
                </div>

                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 pins">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/SmallerPictures/ClayCatSmall.jpg">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Cat Clay pin</h6>
                    </div>
                </div>

                <!--Prints-->
                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 prints">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/Prints/foraged%20Magic.png">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Foraged Magic</h6>
                    </div>
                </div>

                <!--Stickers-->
                <div class="bg-body col-md6 col-lg-4 col-xl-3 p-2 stickers">
                    <div class="collection-img position-relative">
                        <img class="w-100" src="../Resources/images/Stickers/642fbabb-e461-49ab-bcea-7feb750e9590-1.png">
                    </div>
                    <div class="text-center fw-bold my-1">
                        <h6>Cattus</h6>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!--End of selection-->
</main>
<?php
require ("Footer.php");?>
