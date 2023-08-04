<?php
require("Header.php");
$title = "Homepage";?>

<main>
    <!--Featured pictures cards-->
    <section>
        <div class="py-5">
            <div class="Card-column">
                <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-md-4 g-lg-5 g-xl-3 mx-sm-auto mx-md-5 mx-lg-1">
                    <div class="col-auto d-flex justify-content-center">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Foraged Magic" src="../Resources/images/SmallerPictures/DigitalS/foragedMagicS.png">
                                <rect fill="#55595c"/>
                                <text class="mx-2" x="50%" y="50%" fill="#eceeef" ">Digital art</text>
                            </img>
                            <div class="card-body">
                                <p class="card-text">Foraged Magic digital version</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#digitalModal"> View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Godly Beings" src="../Resources/images/SmallerPictures/DrawingS/godlyBeingsOldSmall.png">
                            <rect fill="#55595c"/>
                            <text class="mx-2" x="50%" y="50%" fill="#eceeef" dy=".3em">Drawings</text>
                            </img>
                            <div class="card-body">
                                <p class="card-text">Godly Beings</p>
                                <p class="card-text">Markers and alcohol markers</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Apollo" src="../Resources/images/SmallerPictures/MuralS/apolloSmall.jpg">
                                <rect fill="#55595c"/>
                                <text class="mx-2" x="50%" y="50%" fill="#eceeef" dy=".3em">Murals</text>
                            </img>
                            <div class="card-body">
                                <p class="card-text">Apollo</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Octopie" src="../Resources/images/SmallerPictures/FeltS/feltOctopieSmall.jpg">
                                <rect fill="#55595c"/>
                                <text class="mx-2" x="50%" y="50%" fill="#eceeef" dy=".3em">Felt plushies</text>
                            </img>
                            <div class="card-body">
                                <p class="card-text">Felt Octopus plush</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Felt cat pin" src="../Resources/images/SmallerPictures/PinsS/feltCatPinSmall.jpg">
                                <rect fill="#55595c"/>
                                <text class="mx-2" x="50%" y="50%" fill="#eceeef" dy=".3em">Pins</text>
                            </img>
                            <div class="card-body">
                                <p class="card-text">Felt pin of a cat</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-sm">
                            <img class="card-img-top" alt="Stikers" src="../Resources/images/SmallerPictures/StickersS/stickypileSmall.jpg">
                            <rect fill="#55595c"/>
                            <text class="mx-2" x="50%" y="50%" fill="#eceeef">Stickers</text>
                            </img>
                            <div class="card-body">
                                <p class="card-text">Pile of Cat stickers</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">More art like this</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

                <!-- About me section -->
                <div class="container" style="background-color: #78C4BC">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>About Me</h2>
                            <h5>Photo of the artist:</h5>
                            <div class="position-relative">
                                <img class="profileImg" alt="Adela1" src="../Resources/images/SmallerPictures/profile1.jpg">
                            </div>
                            <h2 style="color: #FFBC36">Welcome</h2>
                            <h4>I'm happy that you've found the way onto my art page. I encourage all people to join me on this path of self discovery, expressed through many creative ways.</h4>
                        </div>
                        <br>
                        <div class="col-sm-7">
                            <br>
                            <img class="profileImg" alt="Adela2" src="../Resources/images/SmallerPictures/profile.jpg">
                            <h4>The main point of my journey in this life is to find out all the things I am capable of creating and put to test the capabilities of my mind and body.
                                I hope that by experiencing my creations, you are left feeling inspired and can use that to further explore yourself.
                                I appreciate any kind of support, be that your kind words, monetary or even just the fact that you took the time to view my work closely.</h4>
                            <br>
                            <!-- Links to other social medias -->
                            <hr>
                            <h3>Some Links to other social media</h3>
                            <div class="col-sm-4">
                                <ul class="row">
                                    <li class="btn btn-primary position-relative">
                                        <a class="btn-link" style="text-decoration: none;" href="https://www.instagram.com/adxla.kurxits/"><img width="30px" alt="Instagram" src="../Resources/icons/icons8-instagram-64.png"/>Instagram</a>
                                    </li>
                                    <li class="btn btn-primary position-relative">
                                        <p><img width="25px" alt="Email" src="../Resources/icons/icons8-email-64.png"/>kurvitsadela@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- The Modal -->
        <div class="modal" id="digitalModal">
            
        </div>

        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
            <div class="mask" style="background-color: #1e1e1e"></div>
        </a>
    </section>
</main>
<?php
require ("Footer.php");