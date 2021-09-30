<!doctype html>
<html lang="en">

<?php require 'partials/head.php'?>

<body>
        <?php require 'partials/header.php'?>
    <!--
        <main>
            <section class="mt-5 container">
                <article class="row gx-0">
                    <div class="col-12 col-lg-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner mb-2">
                                <div class="carousel-item active">
                                        <img src="https://picsum.photos/635/400/?random&t=1" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                        <img src="https://picsum.photos/635/400/?random&t=2" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                        <img src="https://picsum.photos/635/400/?random&t=3" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active me-2" aria-current="true" aria-label="Slide 1">
                                    <img src="https://picsum.photos/635/400/?random&t=1" class="d-block w-100" alt="...">
                                </a>
                                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2" class="me-2">
                                    <img src="https://picsum.photos/635/400/?random&t=2" class="d-block w-100" alt="...">
                                </a>
                                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"">
                                    <img src="https://picsum.photos/635/400/?random&t=3" class="d-block w-100" alt="...">
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
-->

        <main style="margin: 0 5%;">
            <div class="input-group mb-3 mx-auto container-md p-0" style="max-width: 700px;">
                <input id="articleName" type="text" class="form-control" placeholder="Input Text here..." aria-label="Recipient's username" aria-describedby="button-addon2" value="">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="chosenName()">Search</button>
            </div>
            <form class="mb-3">
                <div class="row">
                    <div class="col-md-7 offset-md-5 col-lg-5 offset-lg-7">
                        <div class="row">
                            <div class="col-6 col-md-8">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected value="24">24</option>
                                        <option value="48">48</option>
                                        <option value="ALL">Tutti</option>
                                    </select>
                                    <label for="floatingSelect" class="d-none d-sm-block">Prodotti per pagina</label>
                                    <label for="floatingSelect" class="d-block d-sm-none">Prodotti per pag</label>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="form-floating">
                                    <select class="form-select" id="Filtro2" aria-label="Floating label select example">
                                        <option selected value="Pop">Popolarità</option>
                                        <option value="Nome">Nome</option>
                                        <option value="Prezzo">Prezzo</option>
                                    </select>
                                    <label for="Filtro2">Ordina per</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 col-lg-3 d-none d-md-block">
                        <h3>Category List</h3>
                        <div id="categoryList1">
                            <p onclick="chosenCategory()">Type 1</p>
                        </div>
                    </div>
                    
                    <div class="col-12 d-block d-md-none p-0 mb-3 form-floating">
                        <select class="form-select" aria-label="Default select example" id="categoryList2">
                            <option value="1">One</option>
                        </select>
                        <label for="categoryList2">Ordina per</label>
                    </div>
                    <!--
                    <div class="col-auto" style="padding: 0;">
                        <div class="card row" style="width: auto; flex-direction:row;">
                            <img src="https://picsum.photos/265/263/?random&t=953390749" class="col-3" alt="...">
                            <div class="col-auto" style="padding: 1rem 1rem; position: relative;">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="d-flex justify-content-end align-bottom" style="position: absolute; bottom:1rem; right:1rem;">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    <section id="articleList" class="col-12 col-md-8 col-lg-9">
                        <div class="card mb-3 p-0 border-0">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="/images/immagini/IMG_4175.jpg" class="img-fluid card-img-top" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-0 pt-2 px-md-2">
                                        <h5 class="card-title">Card title</h5>
                                        <div style="overflow-y: scroll;">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    <div class="text-end my-2">
                                        <a href="#" class="btn btn-primary me-2">Maggiori Informazioni</a>
                                        <a href="#" class="btn btn-primary"><i class="bi bi-basket-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>

        <?php require 'partials/footer.php'?>
    
        <?php require 'partials/script.php'?>
    
        <script type="text/javascript">
            let articleObj = [];
            fetch("articleList.json")
                .then(function (response) {
                    console.log(response);
                    return response.json();
                })
                .then(function (result) {
                    articleObj = result;
                    let articleList = document.getElementById("articleList");
                    let nuovohtml = "";
                    
                    for (article of result.articleList) {
//                        console.log('nuovohtml:');
//                        console.log(article);
                        nuovohtml+=templatehtml(article);
//                        console.log(templatehtml(article));
//                        console.log(nuovohtml);
                    }
                    articleList.innerHTML= nuovohtml;
                }).catch((error) => alert(error.message));
            let categoryObj = [];
            fetch("categoryList.json")
                .then((response) => {
                    return response.json()
                })
                .then((result) => {
                    categoryObj = result;
//                    console.log('result:');
//                    console.log(result);
                    let categoryListHTML1 = '';
                    let categoryListHTML2 = '';
                    for(categoria of result.categories) {
                        categoryListHTML1 += `<p><a class="btn btn-primary" onclick="chosenCategory(${categoria.id})">${categoria.nome}</a></p>`
                        categoryListHTML2 += `<option value="${categoria.id}" onclick="chosenCategory(${categoria.id})">${categoria.nome}</option>`;
                    }
                    let categoryList1 = document.getElementById("categoryList1");
                    categoryList1.innerHTML = categoryListHTML1;
                    let categoryList2 = document.getElementById("categoryList2");
                    categoryList2.innerHTML = categoryListHTML2;
                })
            let chosenCategory = (categoryID) => {
                let carte = document.getElementsByClassName(`card`);
                for(carta of carte){
//                    console.log(carta);
  //                  console.log(carta.classList);
    //                console.log(carta.classList[0]);
      //              console.log(parseInt(carta.classList[0].slice(-1)));
                    carta.classList.add('d-none');
                    if (categoryID === parseInt(carta.classList[0].slice(-1))) {
                        carta.classList.remove('d-none');
                        continue
                    }
                }
            };

            let chosenName = () => {
                let textForm = document.getElementById("articleName");
                let carte = document.getElementsByClassName(`card`);
                for(carta of carte){
                    console.log(carta);
                    let nomeArticolo = carta.querySelector('#cardname');
                    carta.classList.add('d-none');
                    if(nomeArticolo.innerHTML === textForm.value){
                        carta.classList.remove('d-none');
                        continue;
                    }
                }
            };
            
            let templatehtml = (article) => {
                        let html = `
                        <article class="category${article.Category} card mb-3 p-0 border-0" id="art${article.ID}">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="${article.Img}" class="img-fluid card-img-top" alt="...">
                                </div>
                                <div class="col-md-8 position-relative">
                                    <div class="card-body p-0 pt-2 px-md-2 d-flex flex-column h-100">
                                        <h5 class="card-title" id="cardname">${article.Name}</h5>
                                        <p class="card-text">${article.Description}</p>
                                        <div class="d-flex align-self-end h-100">
                                            <div class="justify-self-end align-self-end">
                                                <a href="#" class="btn btn-primary me-2">Maggiori Informazioni</a>
                                                <a href="#" class="btn btn-primary"><i class="bi bi-basket-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                                `;
                                return html
                    };


                    /* Coso per prendere l'url e leggerlo nella barra di ricerca */

                    const str = window.location.href;

                    document.getElementById("articleName").value = str.split('=').pop();
                    
                    console.log("UGABUGA");
                    console.log(window.location.href);
                    console.log("TRALLALLA");


                    /* non funziona*/
        </script>
    </body>

</html>
