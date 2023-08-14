<?php
require("Header.php");
$title = "Homepage";?>
    <main>
        <div class="container">
            <div class="row">
                <?php include("HomeSections/Intro.php") ?>
            </div>
        </div>
        <!--Featured pictures cards-->
        <div class="container">
            <div class="row gallery-title py-2">
                <h2 class="title position-relative d-inline-block">Featured artworks from different styles and mediums</h2>
            </div>
            <div class="row">
                <!-- Digital art -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 align-items-start">
                    <div class="art-category">
                        <div class="category-image">
                            <img alt="Foraged Magic" src="../Resources/images/SmallerPictures/DigitalS/foragedMagicS.png">
                        </div>
                        <div class="art-category-description">
                            <h4>Digital art</h4>
                            <p>Foraged Magic digital artwork</p>
                            <div class="btn-group">
                                <button type="button" class="btn art-categories-btn btn-sm" id="popup_digital"> View</button>
                                <button type="button" class="btn art-categories-btn btn-sm ">More art like this</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 align-items-start">
                    <div class="art-category">
                        <div class="category-image">
                            <img alt="Godly Beings" src="../Resources/images/SmallerPictures/DrawingS/godlyBeingsOldSmall.png">
                        </div>
                        <div class="art-category-description">
                            <h4>Drawings</h4>
                            <p>Godly Beings drawing with markers</p>
                            <div class="btn-group">
                                <button type="button" class="btn art-categories-btn btn-sm" id="popup_drawing"> View</button>
                                <button type="button" class="btn art-categories-btn btn-sm">More art like this</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 align-items-start">
                    <div class="art-category">
                        <div class="category-image">
                            <img alt="Octopi" src="../Resources/images/SmallerPictures/FeltS/feltOctopiSmall.jpg">
                        </div>
                        <div class="art-category-description">
                            <h4>Felt plushies</h4>
                            <p>Felt Octopi plushies</p>
                            <div class="btn-group">
                                <button type="button" class="btn art-categories-btn btn-sm" id="popup_felt1">View</button>
                                <button type="button" class="btn art-categories-btn btn-sm">More art like this</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 align-items-start">
                    <div class="art-category">
                        <div class="category-image">
                            <img alt="Felt terrarium" src="../Resources/images/SmallerPictures/FeltS/mushroomAssortmentSmall1.jpg">
                        </div>
                        <div class="art-category-description">
                            <h4>Felt decoration</h4>
                            <p>Felt Terrarium</p>
                            <div class="btn-group">
                                <button type="button" class="btn art-categories-btn btn-sm" id="popup_felt2">View</button>
                                <button type="button" class="btn art-categories-btn btn-sm">More art like this</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 align-items-start">
                    <div class="art-category">
                        <div class="category-image">
                            <img alt="Apollo" src="../Resources/images/SmallerPictures/MuralS/apolloSmall.jpg">
                        </div>
                        <div class="art-category-description">
                            <h4>Murals</h4>
                            <p>Apollo mural</p>
                            <div class="btn-group">
                                <button type="button" class="btn art-categories-btn btn-sm" id="popup_mural">View</button>
                                <button type="button" class="btn art-categories-btn btn-sm">More art like this</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 align-items-start">
                    <div class="art-category">
                        <div class="category-image">
                            <img alt="Cacti desert" src="../Resources/images/SmallerPictures/PaintingS/cactiDesertSmall.jpg">
                        </div>
                        <div class="art-category-description">
                            <h4>Paintings</h4>
                            <p>Cacti desert acrylic painting</p>
                            <div class="btn-group">
                                <button type="button" class="btn art-categories-btn btn-sm" id="popup_painting">View</button>
                                <button type="button" class="btn art-categories-btn btn-sm">More art like this</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 align-items-start">
                    <div class="art-category">
                        <div class="category-image">
                            <img alt="Clay cat pin" src="../Resources/images/SmallerPictures/PinsS/petPortraitPinSmall.jpg">
                        </div>
                        <div class="art-category-description">
                            <h4>Pins</h4>
                            <p>Clay pin of a cat</p>
                            <div class="btn-group">
                                <button type="button" class="btn art-categories-btn btn-sm" id="popup_pin">View</button>
                                <button type="button" class="btn art-categories-btn btn-sm">More art like this</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 align-items-start">
                    <div class="art-category">
                        <div class="category-image">
                            <img alt="Stickers" src="../Resources/images/SmallerPictures/StickersS/stickerPileSmall.jpg">
                        </div>
                        <div class="art-category-description">
                            <h4>Stickers</h4>
                            <p>Pile of Cat series stickers</p>
                            <div class="btn-group">
                                <button type="button" class="btn art-categories-btn btn-sm" id="popup_sticker">View</button>
                                <button type="button" class="btn art-categories-btn btn-sm">More art like this</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About me section -->
        <?php include("HomeSections/AboutMe.php") ?>
    </main>
<?php
require("Footer.php");