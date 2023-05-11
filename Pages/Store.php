<?php
require("Header.php");
$title = "Storepage";?>
<body>
<main>

    <!--Featured pictures-->
    <section style="margin: 150px;">
        <div class="jumbotron p-1 mb-2 bg-body-tertiary rounded-3 ">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Art store</h1>
                <p class="col-md-6 fs-4">Art that I sell or have sold and commission prices</p>
            </div>
        </div>
        <div class="album py-5 bg-body-tertiary" >
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="jumbotron">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" src="../resources/images/Prints/foraged%20Magic.png">
                            <rect width="100%" height="100%" fill="#55595c"/>
                            </img>
                            <div class="card-body">
                                <p class="card-title my-1">Digital art</p>
                                <p class="card-text my-1">Poster:</p>
                                <span class="fw-bold">30€, 40€</span>
                                <p class="card-text my-1">Canvas:</p>
                                <span class="fw-bold">60€</span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" width="75%" height="75%" src="../resources/images/Stickers/stickypile.jpg">
                                <rect width="100%" height="100%" fill="#55595c"/>
                            </img>
                            <div class="card-body">
                                <p class="card-title my-1">Digital art</p>
                                <p class="card-text">5pc:</p>
                                <span class="fw-bold">5€</span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" width="75%" height="75%" src="../resources/images/SmallerPictures/apollo7.jpg">
                            <rect width="100%" height="100%" fill="#55595c"/>
                            <div class="card-body">
                                <p class="card-title my-1">Digital art</p>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" width="75%" height="75%" src="../resources/images/Felt/puss.jpg">
                            <rect width="100%" height="100%" fill="#55595c"/>
                            <div class="card-body">
                                <p class="card-title my-1">Digital art</p>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" width="75%" height="75%" src="IMG_20221229_132457.png"><title>Picture 1</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Picture 1</text></img>
                            <div class="card-body">
                                <p class="card-title my-1">Digital art</p>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" width="75%" height="75%" src="IMG_20221229_132457.png"><title>Picture 1</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Picture 1</text></img>
                            <div class="card-body">
                                <p class="card-title my-1">Digital art</p>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="container" style="margin-top:30px; background-color: #0d6efd">
            <div class="row">
                <div class="col-sm-5">
                    <h2>Commission Me</h2>
                    <div class="profileImg">
                        <img class="profileImg" src="" width="150px">
                    </div>
                    <a href="storePage.html">Fill in a form</a>

                </div>
            </div>
    </section>
</main>
<?php
require ("Footer.php");?>