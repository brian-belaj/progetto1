<!doctype html>
<html lang="en">

<?php require 'partials/head.php'?>

<body>
    <!-- header from partials -->
    <?php require 'partials/header.php'?>

    <div class="container" id="login_container">
        <div class="row">
            <form>
                <h2>Login</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Inserisci la tua email">
                </div>
                <div class="form-group password-input">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Inserisci la tua password">
                </div>
                <button type="submit" class="btn btn-dark">Login</button>
                <button class="btn btn-secondary" id="cancel-btn">Annulla</button>
            </form>
        </div>
    </div>

    <div class="container" id="srcBar">
        <div class="row">
            <form action="list.php" method="get">
                <h2>Cosa Cerchi?</h2>

                <input id="articleName" type="text" name="src_bar" class="form-control" placeholder="Input Text here..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit">Search</button>

                <button class="btn btn-secondary" id="cancelSrc-btn">Annulla</button>
            </form>
        </div>
    </div>

    <main>
        <section class="mt-4">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <picture>
                            <img src="/images/immagini/IMG_4139.jpg"
                                class="d-block w-100" alt="...">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <img src="/images/immagini/IMG_4139a.jpg"
                                class="d-block w-100" alt="...">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <img src="/images/immagini/IMG_4139b.jpg"
                                class="d-block w-100" alt="...">
                        </picture>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="mt-3 container">
            <div class="text-center mx-5 h4">
                Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
            </div>
        </section>
        <section class="mt-5 container">
            <article class="row gx-0">
                <div class="col-12 col-lg-6"><img src="/images/immagini/IMG_4155.jpg"
                        class="d-block w-100" alt="..."></div>
                <div class="col-12 col-lg-6">
                    <section class="p-3">
                        <caption>25 Agosto 2021</caption>
                        <h4 class="mt-3">
                            Vestibulum id ligula porta felis euismod semper.
                        </h4>
                        <p>
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo
                            odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue.
                        </p>
                        <a class="btn btn-primary" href="/list.php">
                            Read More
                        </a>
                    </section>
                </div>
            </article>
            <article class="row gx-0">
                <div class="col-12 col-lg-6">
                    <section class="p-3">
                        <caption>20 Agosto 2021</caption>
                        <h4 class="mt-3">
                            Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
                            elit.
                        </h4>
                        <p>
                            Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at
                            lobortis. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis euismod
                            semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                            fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum
                            faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.
                        </p>
                        <a class="btn btn-primary" href="/list.php">
                            Read More
                        </a>
                    </section>
                </div>
                <div class="col-12 col-lg-6"><img src="/images/immagini/IMG_4155a.jpg"
                        class="d-block w-100" alt="..."></div>
            </article>
        </section>
        <section class="mt-5 container">
            <picture>
                <img src="/images/immagini/IMG_4170.jpg" class="d-block w-100" alt="...">
            </picture>
        </section>
        <section class="mt-5 container">
            <div class="text-center mx-5 h4">
                Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
            </div>
        </section>
        <section class="mt-5 container">
            <div class="row">
                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/IMG_4175.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/IMG_4175.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/IMG_4175.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/IMG_4175.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <?php require 'partials/footer.php'?>

    <?php require 'partials/script.php'?>
</body>

</html>