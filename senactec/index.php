<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portifólio - SenacTec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php  include_once(__DIR__."/include/header.php")?>
    <main>
        <section style="background-image: url(img/img-01.png); height: 540px; background-repeat: no-repeat; background-position: center;" class="mt-3 shadow-sm">
            <div class="container h-100 align-content-around">
                <div class="row">
                    <div class="col d-flex justify-content-between">
                        <div class="col-4">
                            <a href="#" class="h1 link-secondary link-underline link-underline-opacity-0 link-opacity-50-hover fw-lighter">
                                <span>designer</span>
                                <p class="fs-5">Designer de produto especializado em UI design e sistemas de design.</p>
                            </a>
                        </div>
                        <div class="col-4 text-end">
                            <a href="#" class="h1 link-secondary link-underline link-underline-opacity-0 link-opacity-50-hover fw-lighter">
                                <span>coder</span>
                                <p class="fs-5">Desenvolvedor front-end que escreve código limpo, elegante e eficiente.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-4">
            <div class="container">
                <div class="row">
                    <div class="col fs-4 text-secondary text-center">Trabalhos em Destaque</div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
      n        <div class="col d-flex justify-content-center">
                        <div class="card px-1 pt-1" style="width: 18rem;">
                            <img src="img/img2.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="link-secondary link-underline link-underline-opacity-0 link-opacity-50-hover">
                                    <p class="card-text fw-lighter">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </a>
                            </div>
                        </div>
                        <div class="card mx-3 px-1 pt-1" style="width: 18rem;">
                            <img src="img/img2.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="link-secondary link-underline link-underline-opacity-0 link-opacity-50-hover">
                                    <p class="card-text fw-lighter">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </a>
                            </div>
                        </div>
                        <div class="card px-1 pt-1" style="width: 18rem;">
                            <img src="img/img2.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="link-secondary link-underline link-underline-opacity-0 link-opacity-50-hover">
                                    <p class="card-text fw-lighter">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php  include_once(__DIR__."/include/footer.php")?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>