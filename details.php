<!doctype html>
<html lang="en">
  <?php require 'partials/head.php'?>
<body>
    <?php require 'partials/header.php'?>
        <main>
        <section class="mt-5 container">
                <article class="row gx-0">
                    <div class="col-12 col-lg-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner mb-2">
                                <div class="carousel-item active">
                                        <img src="/images/immagini/IMG_4155.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                        <img src="/images/immagini/IMG_4155a.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                        <img src="/images/immagini/IMG_4155.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active me-2" aria-current="true" aria-label="Slide 1">
                                    <img src="/images/immagini/IMG_4155.jpg" class="d-block w-100" alt="...">
                                </a>
                                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2" class="me-2">
                                    <img src="/images/immagini/IMG_4155a.jpg" class="d-block w-100" alt="...">
                                </a>
                                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"">
                                    <img src="/images/immagini/IMG_4155.jpg" class="d-block w-100" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <section class="p-3">
                            <caption>25 Agosto 2021</caption>
                            <h4 class="mt-3">
                                Vestibulum id ligula porta felis euismod semper.
                            </h4>
                            <p>
                                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                                massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras
                                justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a
                                pharetra augue.
                            </p>
                            <a class="btn btn-primary" href="/list.php">
                                Read More
                            </a>
                        </section>
                    </div>
                </article>
            </section>
        </main>
        <footer class="mt-5 bg-primary">
            <div class="container p-5">
                <a class="d-block m-auto text-white text-decoration-none h3" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 37.088 43.349">
                        <g id="logo_Alias" data-name="logo Alias" transform="translate(0 0)">
                            <path id="Tracciato_3" data-name="Tracciato 3"
                                d="M138.576,342.453a.672.672,0,0,0-.192.471v5.995h0L132.395,355a.672.672,0,0,0-.192.471v5.995l-5.989,6.077a.673.673,0,0,0-.192.471v5.719a.672.672,0,0,0,.192.471l2.9,2.941,2.625,2.664a.651.651,0,0,0,.93,0l2.625-2.664L138.383,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.626-2.664L150.746,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.625-2.664,2.9-2.941a.672.672,0,0,0,.193-.471V368.01a.673.673,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.524-5.605a.65.65,0,0,0-.929,0Z"
                                transform="translate(-126.021 -336.652)" fill="#fff"></path>
                        </g>
                    </svg>
                    Alias
                </a>
                <p class="text-white mt-3">
                    Nullam quis risus eget urna mollis ornare vel eu leo. Praesent commodo cursus magna, vel scelerisque
                    nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non
                    commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam.
                    Pellentesque ornare sem lacinia quam venenatis vestibulum.
                </p>
                <hr class="bg-white">
                <!-- ShareThis BEGIN -->
                <div class="mt-5 sharethis-inline-share-buttons"></div><!-- ShareThis END -->
            </div>
        </footer>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <?php require 'partials/script.php'?>
    
    </body>

</html>
