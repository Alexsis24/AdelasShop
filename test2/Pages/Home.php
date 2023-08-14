<?php
require("Header.php");
$title = "Homepage";?>

    <div class="container">
        <div class="row">
            <!-- Digital Art -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="art-category">
                    <div class="category-image">
                        <img src="../Resources/images/SmallerPictures/DigitalS/foragedMagicS.png" alt="Digital Art" class="img-responsive">
                    </div>
                    <div class="art-category-description">
                        <h4>Digital Art</h4>
                        <p>Foraged Magic digital version</p>
                        <button type="button" class="art-categories-btn" id="open-popup"> View</button>
                        <button type="button" class="art-categories-btn">More art like this</button>
                    </div>
                </div>
            </div>
            <!-- Drawings -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="art-category">
                    <div class="category-image">
                        <img src="../Resources/images/SmallerPictures/DrawingS/godlyBeingsOldSmall.png" alt="Drawings" class="img-responsive">
                    </div>
                    <div class="art-category-description">
                        <h4>Drawings</h4>
                        <p>Godly Beings</p>
                        <button type="button" class="art-categories-btn" id="drawings"> View</button>
                        <button type="button" class="art-categories-btn">More art like this</button>
                    </div>
                </div>
            </div>

            <!-- Murals -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="art-category">
                    <div class="category-image">
                        <img src="../Resources/images/SmallerPictures/MuralS/apolloSmall.jpg" alt="Murals" class="img-responsive">
                    </div>
                    <div class="art-category-description">
                        <h4>Murals</h4>
                        <p>Apollo</p>
                        <button type="button" class="art-categories-btn" id="murals"> View</button>
                        <button type="button" class="art-categories-btn">More art like this</button>
                    </div>
                </div>
            </div>

            <!-- Felt Plushies -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="art-category">
                    <div class="category-image">
                        <img src="../Resources/images/SmallerPictures/FeltS/feltOctopieSmall.jpg" alt="Murals" class="img-responsive">
                    </div>
                    <div class="art-category-description">
                        <h4>Felt Plushies</h4>
                        <p>Felt Octopus plush</p>
                        <button type="button" class="art-categories-btn" id="felt-plushies"> View</button>
                        <button type="button" class="art-categories-btn">More art like this</button>
                    </div>
                </div>
            </div>

            <!-- Pins -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="art-category">
                    <div class="category-image">
                        <img src="../Resources/images/SmallerPictures/PinsS/feltCatPinSmall.jpg" alt="Murals" class="img-responsive">
                    </div>
                    <div class="art-category-description">
                        <h4>Pins</h4>
                        <p>Felt pin of a cat</p>
                        <button type="button" class="art-categories-btn" id="pins"> View</button>
                        <button type="button" class="art-categories-btn">More art like this</button>
                    </div>
                </div>
            </div>

            <!-- Stickers -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="art-category">
                    <div class="category-image">
                        <img src="../Resources/images/SmallerPictures/StickersS/stickypileSmall.jpg" alt="Murals" class="img-responsive">
                    </div>
                    <div class="art-category-description">
                        <h4>Stickers</h4>
                        <p>Pile of Cat stickers</p>
                        <button type="button" class="art-categories-btn" id="stickers"> View</button>
                        <button type="button" class="art-categories-btn">More art like this</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row" style="background-color: #78C4BC">

        <div class="col-md-4">
            <h2>About Me</h2>
            <h5>Photo of the artist:</h5>
            <img src="../Resources/images/SmallerPictures/profile1.jpg" alt="Adela 1" class="img-responsive">
        </div>
        <div class="col-md-4">
            <h2 style="color: #FFBC36">Welcome</h2>
            <h4>I'm happy that you've found the way onto my art page. I encourage all people to join me on this path of self discovery, expressed through many creative ways.</h4>
            <h4>The main point of my journey in this life is to find out all the things I am capable of creating and put to test the capabilities of my mind and body.
                I hope that by experiencing my creations, you are left feeling inspired and can use that to further explore yourself.
                I appreciate any kind of support, be that your kind words, monetary or even just the fact that you took the time to view my work closely.</h4>
        </div>
        <br>
        <div class="col-md-4">
            <img src="../Resources/images/SmallerPictures/profile.jpg" alt="Adela 2" class="img-responsive">
        </div>

        <!-- Links to other social medias -->
        <hr>
        <h3>Some Links to other social media</h3>
        <div class="col-md-6">
            <li class="social-btn">
                <a class="btn-link"  href="https://www.instagram.com/adxla.kurxits/"><img width="30px" alt="Instagram" src="../Resources/icons/icons8-instagram-64.png"/>Instagram</a>
            <li class="social-btn">
                <p><img width="25px" alt="Email" src="../Resources/icons/icons8-email-64.png"/>kurvitsadela@gmail.com</p>
            </li>
        </div>
    </div>
<?php
require ("Footer.php");