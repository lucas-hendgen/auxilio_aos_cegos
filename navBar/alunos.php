<?php 
    include "../head.php"
?>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="../index.php" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="./justificativa.php" class="nav-link px-2 text-white">Justificativa</a></li>
                    <li><a href="./objetivo.php" class="nav-link px-2 text-white">Objetivo</a></li>
                    <li><a href="./alunos.php" class="nav-link px-2 text-secondary">Alunos</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="row mt-4 ms-5 gap-3">

            <div class="card col-5 px-0">
                <img class="card-img-top" src="../img/andressa.jpg" alt="image">
                <div class="card-body">
                    <p class="card-text"><strong>Andressa Raimann Berlezi</strong></p>
                </div>
            </div>

            <div class="card col-5 px-0">
                <img class="card-img-top" src="../img/cristiane.jpg" alt="image">
                <div class="card-body">
                    <p class="card-text"><strong>Cristiane Gabriela Barbosa Moraes</strong></p>
                </div>
            </div>

            <div class="card col-5 px-0">
                <img class="card-img-top" src="../img/katia.jpg" alt="image">
                <div class="card-body">
                    <p class="card-text"><strong>Kátia Wink Klein</strong></p>
                </div>
            </div>

            <div class="card col-5 px-0">
                <img class="card-img-top" src="../img/lais.jpg" alt="image">
                <div class="card-body">
                    <p class="card-text"><strong>Laís Camile Pauli</strong></p>
                </div>
            </div>

        </div>
    </main>

    <?php 
        include "../footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>