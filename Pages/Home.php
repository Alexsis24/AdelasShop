<?php
require("Header.php");
$title = "Homepage";?>

<main>
    <!--Featured pictures cards-->
    <section>
        <div class="py-5">
            <div class="Card-column">
                <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xxl-4 g-md-4 g-lg-5 g-xl-3 mx-sm-auto mx-md-5 mx-lg-1 align-items-start">
                    <div class="col d-flex justify-content-center align-items-end">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Foraged Magic" src="../Resources/images/SmallerPictures/DigitalS/foragedMagicS.png">
                            <div class="card-body">
                                <h3 class="card-title">Digital art</h3>
                                <p class="card-text">Foraged Magic digital artwork</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm" id="popup_digital"> View</button>
                                        <button type="button" class="btn btn-primary btn-sm ">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center align-items-end">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Godly Beings" src="../Resources/images/SmallerPictures/DrawingS/godlyBeingsOldSmall.png">
                            <div class="card-body">
                                <h3 class="card-title">Drawings</h3>
                                <p class="card-text">Godly Beings drawing with markers</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm" id="popup_drawing"> View</button>
                                        <button type="button" class="btn btn-primary btn-sm">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center align-items-end">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Octopie" src="../Resources/images/SmallerPictures/FeltS/feltOctopieSmall.jpg">
                            <div class="card-body">
                                <h3 class="card-title">Felt plushies</h3>
                                <p class="card-text">Felt Octopie plushies</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm" id="popup_felt">View</button>
                                        <button type="button" class="btn btn-primary btn-sm">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center align-items-end">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Apollo" src="../Resources/images/SmallerPictures/MuralS/apolloSmall.jpg">
                            <div class="card-body">
                                <h3 class="card-title">Murals</h3>
                                <p class="card-text">Apollo mural</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm" id="popup_mural">View</button>
                                        <button type="button" class="btn btn-primary btn-sm">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center align-items-end">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Cacti desert" src="../Resources/images/SmallerPictures/PaintingS/cactiDesertSmall.jpg">
                            <div class="card-body">
                                <h3 class="card-title">Paintings</h3>
                                <p class="card-text">Cacti desert acrylic painting</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm" id="popup_painting">View</button>
                                        <button type="button" class="btn btn-primary btn-sm">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center align-items-end">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Clay cat pin" src="../Resources/images/SmallerPictures/PinsS/petPortraitPinSmall.jpg">
                            <div class="card-body">
                                <h3 class="card-title">Pins</h3>
                                <p class="card-text">Clay pin of a cat</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm" id="popup_pin">View</button>
                                        <button type="button" class="btn btn-primary btn-sm">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center align-items-end">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Stickers" src="../Resources/images/SmallerPictures/StickersS/stickypileSmall.jpg">
                            <div class="card-body">
                                <h3 class="card-title">Stickers</h3>
                                <p class="card-text">Pile of Cat series stickers</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm" id="popup_sticker">View</button>
                                        <button type="button" class="btn btn-primary btn-sm">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

                <!-- About me section -->
                <?php include("HomeSections/AboutMe.php") ?>
    </section>
</main>
<?php
require("Footer.php");