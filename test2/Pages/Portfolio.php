<?php
require ("Header.php");
$title = "Portfolio";?>

<!--Selection-->
<main>
    <div class="title text-center mt-5">
                <h2 class="position-relative d-inline-block">Portfolio</h2>
    </div>
            
            <div class="portfolio">
                <ul class="controls">
                    <li class="buttons active" data-filter = "all">All</li>
                    <li class="buttons" data-filter = "digital">Digital</li>
                    <li class="buttons" data-filter = "drawings">Drawings</li>
                    <li class="buttons" data-filter = "felts">Felts</li>
                    <li class="buttons" data-filter = "murals">Murals</li>
                    <li class="buttons" data-filter = "paintings">Paintings</li>
                    <li class="buttons" data-filter = "pins">Pins</li>
                    <li class="buttons" data-filter = "stickers">Stickers</li>
                </ul>

                    <div class="portfolio-container">



                        <!--Digital-->
                            <div class="image digital">
                                <a href="../Resources/images/SmallerPictures/DigitalS/foragedMagicS.png" >
                                    <img src="../Resources/images/SmallerPictures/DigitalS/foragedMagicS.png" alt="Foraged Magic">
                                </a>
                                <div class="portfolio-description">
                                    <h4>Digital</h4>
                                    <p>Apollo</p>
                                    <button type="button" class="art-categories-btn" id="digital1"> View</button>
                                </div>
                            </div>
                            

                        <!--Drawings-->
                            <a href="../Resources/images/Drawings/fantasyPortrait.jpg" class="image drawings">
                                <img src="../Resources/images/Drawings/fantasyPortrait.jpg" alt="Foraged Magic">
                                <div class="portfolio-description">           
                                    <h4>Murals</h4>
                                    <p>Apollo</p>
                                    <button type="button" class="art-categories-btn" id="digital2"> View</button>
                                </div>
                            </a>


                        <!--Felts-->
                        <a href="../Resources/images/Drawings/fantasyPortrait.jpg" class="image felts">
                                <img src="../Resources/images/Drawings/fantasyPortrait.jpg" alt="Foraged Magic">
                                <div class="portfolio-description">           
                                    <h4>Murals</h4>
                                    <p>Apollo</p>
                                </div>
                            </a>


                        <!--Murals-->
                        <a href="../Resources/images/Drawings/fantasyPortrait.jpg" class="image murals">
                                <img src="../Resources/images/Drawings/fantasyPortrait.jpg" alt="Foraged Magic">
                                <div class="portfolio-description">           
                                    <h4>Murals</h4>
                                    <p>Apollo</p>
                                </div>
                            </a>


                        <!--Paintings-->
                        <a href="../Resources/images/Drawings/fantasyPortrait.jpg" class="image paintings">
                                <img src="../Resources/images/Drawings/fantasyPortrait.jpg" alt="Foraged Magic">
                                <div class="portfolio-description">           
                                    <h4>Murals</h4>
                                    <p>Apollo</p>
                                </div>
                            </a>

                        <!--Pins-->
                            <a href="../Resources/images/Drawings/fantasyPortrait.jpg" class="image pins">
                                <img src="../Resources/images/Drawings/fantasyPortrait.jpg" alt="Foraged Magic">
                                <div class="portfolio-description">           
                                    <h4>Murals</h4>
                                    <p>Apollo</p>
                                </div>
                            </a>

                        <!--Stickers-->
                        <a href="../Resources/images/Drawings/fantasyPortrait.jpg" class="image stickers">
                            <img src="../Resources/images/Drawings/fantasyPortrait.jpg" alt="Foraged Magic">
                            <div class="portfolio-description">           
                                <h4>Murals</h4>
                                <p>Apollo</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        
    <!--End of selection-->
</main>
<?php
require ("Footer.php");?>
