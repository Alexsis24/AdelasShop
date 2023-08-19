<?php
require("Header.php");
$title = "Commission me page";?>
<main>
    <div class="commission-container container my-3">
        <div class="commission-rules">
            <div class="row d-flex">
                <div class="col-md-9">
                    <h1>NB! Shipping available only in Estonia.</h1>
                    <h3>To commission something from the artist you need to send an E-mail to kurvitsadela@gmail.com with details listed in the guidelines below.</h3>
                    <h3>Price can differ from the guidelines depending on the complexity of the work.</h3>
                </div>
                <div class="col-md-3 d-flex  align-items-center justify-content-center">
                    <img class="w-75" src="../Resources/images/Commissions/momentpic.jpg">
                </div>
            </div>

        </div>
        <div class="commission-tabs">
            <h2>Select a category to view guidelines for commissions</h2>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="drawing-tab" data-bs-toggle="tab" data-bs-target="#drawing-tab-pane"
                            type="button" role="tab" aria-controls="drawing-tab-pane" aria-selected="true">Drawings digital and traditional
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="painting-tab" data-bs-toggle="tab" data-bs-target="#painting-tab-pane"
                            type="button" role="tab" aria-controls="painting-tab-pane" aria-selected="false">Painting
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="felt-tab" data-bs-toggle="tab" data-bs-target="#felt-tab-pane"
                            type="button" role="tab" aria-controls="felt-tab-pane" aria-selected="false">Felt
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="other-tab" data-bs-toggle="tab" data-bs-target="#other-tab-pane"
                            type="button" role="tab" aria-controls="other-tab-pane" aria-selected="false">Other
                    </button>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="drawing-tab-pane" role="tabpanel" aria-labelledby="drawing-tab"
                 tabIndex="0">
                <div class="commissions-guide">
                    <h1>Digital and drawing commissions guide:</h1>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Digital art options:</h3>
                            <ul>
                                <li>PNG file</li>
                                <li>Poster</li>
                                <li>Printed on canvas</li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h3>Traditional art options:</h3>
                            <ul>
                                <li>Paper A5</li>
                                <li>Paper A4</li>
                                <li>Hard canvas</li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h3>What details I need:</h3>
                            <ul>
                                <li>Art medium and what type/size</li>
                                <li>Color or just line work</li>
                                <li>Picture or description of the character</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <h3>Linework only:</h3>
                            <ul>
                                <li>Headshot: 5 €</li>
                                <li>Top half: 10 €</li>
                                <li>Full body: 15 €</li>
                                <li>Background: +5 €</li>
                                <li>Extra character: x2</li>
                                <li>+ shipping costs</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3>Line work and colors:</h3>
                            <ul>
                                <li>Headshot: 10 €</li>
                                <li>Top half: 20 €</li>
                                <li>Full body: 30 €</li>
                                <li>Background: +10 €</li>
                                <li>Per extra character: x2</li>
                                <li>+ shipping costs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="examples col-md-4">
                            <h3>Headshot example:</h3>
                            <img alt="headshot example" src="../Resources/images/Commissions/commissionGuideHeadSidesAndBack.jpg">
                        </div>

                        <div class="examples col-md-4">
                            <h3>Top half with color example:</h3>
                            <img alt="Top + color example" src="../Resources/images/SmallerPictures/CommissionS/commissionGuideUpperBodySmall.jpg">
                        </div>

                        <div class="examples col-md-4">
                            <h3>Top half line work with background example:</h3>
                            <img alt="Top + bg example" src="../Resources/images/SmallerPictures/DigitalS/coloringBookSmall4.jpg">
                        </div>
                        <div class="examples col-md-4">
                            <h3>Full body and color example:</h3>
                            <img alt="Full + color + bg example" src="../Resources/images/SmallerPictures/DigitalS/OCComSmall.png">
                        </div>

                        <div class="examples col-md-4">
                            <h3>Full body, color and background example:</h3>
                            <img alt="Full + color + bg example" src="../Resources/images/SmallerPictures/DrawingS/techThemeComSmall.jpg">
                        </div>

                        <div class="examples col-md-4">
                            <h3>Multiple characters with color example:</h3>
                            <img alt="Multiple example" src="../Resources/images/SmallerPictures/DrawingS/fantasyPortraitSmall.jpg">
                        </div>

                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="painting-tab-pane" role="tabpanel" aria-labelledby="painting-tab"
                 tabIndex="0">
                <div class="commissions-guide">
                    <h1>Painting commissions guide:</h1>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Art medium:</h3>
                            <ul>
                                <li>Acrylic</li>
                                <li>Watercolor</li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h3>What details I need:</h3>
                            <ul>
                                <li>Size of the canvas</li>
                                <li>Which art medium</li>
                                <li>Description of the commissions idea</li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h3>Price includes:</h3>
                            <ul>
                                <li>Cost of canvas</li>
                                <li>+5 € per hour of work</li>
                                <li>+ shipping costs</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="examples col-md-4">
                            <h3>Smaller painting example:</h3>
                            <img alt="small example" src="../Resources/images/SmallerPictures/PaintingS/spacecatSmall.jpg">
                        </div>

                        <div class="examples col-md-4">
                            <h3>Bigger painting example:</h3>
                            <img class="w-100" alt="big example" src="../Resources/images/SmallerPictures/PaintingS/foragedMagicOldSmall.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="felt-tab-pane" role="tabpanel" aria-labelledby="felt-tab"
                 tabIndex="0">
                <div class="commissions-guide">
                    <h1>Felt commissions guide:</h1>
                    <hr>
                    <div class="row d-flex">
                        <div class="col-md-4">
                            <h3>Felt terrarium details</h3>
                            <ul>
                                <li>Colorful felt</li>
                                <li>Hand or machine sewn details</li>
                                <li>Base: pot</li>
                                <li>Hand sewn patterns</li>
                                <li>Beads</li>
                            </ul>
                        </div>

                        <div class="examples col-md-4">
                            <img src="../Resources/images/SmallerPictures/CommissionS/commissionGuideFeltSmall1.jpg">
                        </div>

                        <div class="examples col-md-4">
                            <img src="../Resources/images/SmallerPictures/CommissionS/commissionGuideFeltSmall3.jpg">
                        </div>
                        <div class="examples col-md-4">
                            <img src="../Resources/images/SmallerPictures/CommissionS/commissionGuideFeltSmall6.jpg">
                        </div>

                        <div class="examples col-md-4">
                            <img src="../Resources/images/SmallerPictures/CommissionS/commissionGuideFeltSmall7.jpg">
                        </div>

                        <div class="examples col-md-4">
                            <img src="../Resources/images/SmallerPictures/CommissionS/commissionGuideFeltSmall9.jpg">
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <h3>Types of artworks and its estimated costs</h3>
                        <p>NB! Shipping costs will add to the estimated cost</p>
                        <div class="examples col-md-4">
                            <h3>Felt terrarium</h3>
                            <img alt="Felt" src="../Resources/images/SmallerPictures/FeltS/cactiAssortmentSmall.png">
                            <h5>5 € per hour of work</h5>
                        </div>

                        <div class="examples col-md-4">
                            <h3>Felt doll</h3>
                            <img alt="Felt" src="../Resources/images/SmallerPictures/FeltS/feltDollSmall.jpg">
                            <h5>Price range: 25-30 €</h5>
                        </div>

                        <div class="examples col-md-4">
                            <h3>Felt plushy</h3>
                            <img alt="Felt" src="../Resources/images/SmallerPictures/FeltS/feltOctopiSmall.jpg">
                            <h5>Price range: 25-30 €</h5>
                        </div>

                        <div class="examples col-md-4">
                            <h3>Felt big plushy</h3>
                            <img alt="Felt" src="../Resources/images/Felt/feltBigOctopus.jpg">
                            <h5>Price range: 100+ €</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="other-tab-pane" role="tabpanel" aria-labelledby="other-tab"
                 tabIndex="0">
                <div class="commissions-guide">
                    <h1>Other</h1>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <h3>If none of the options fit with the commission idea you can still E-mail the description.</h3>
                            <h3>Just make sure to give me some idea of what art medium it falls under and its details to help me understand.</h3>
                        </div>
            </div>
        </div>
    </div>
</main>
<?php include("Footer.php");?>
