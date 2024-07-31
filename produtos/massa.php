<?php
include "../head.php"
?>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="../index.php" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="../navBar/justificativa.php" class="nav-link px-2 text-white">Justificativa</a></li>
                    <li><a href="../navBar/objetivo.php" class="nav-link px-2 text-white">Objetivo</a></li>
                    <li><a href="../navBar/alunos.php" class="nav-link px-2 text-white">Alunos</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        
        <?php
        include "../campo_buscar.php"
        ?>

        <div class="d-flex justify-content-center mt-4">
            <div class="card w-75">
                <div class="card-body">
                    <h5 class="card-title text-center">Massa</h5>
                    <h6>Composição</h6>
                    <ul>
                        <li>Farinha de trigo</li>
                        <li>Água</li>
                        <li>Ovos (em algumas variações)</li>
                    </ul>

                    <h6>Contra Indicações</h6>
                    <ul>
                        <li>Pessoas com intolerância ao glúten ou doença celíaca devem evitar massas feitas com trigo.</li>
                    </ul>
                    <audio controls="controls" src="./audios/massa.mp3" style="width: 260px;"></audio>
                </div>
            </div>
        </div>
    </main>

    <?php
    include "../footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php
    include "../busca.php";
    ?>

</body>

</html>