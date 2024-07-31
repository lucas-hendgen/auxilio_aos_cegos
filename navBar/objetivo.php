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
                    <li><a href="./objetivo.php" class="nav-link px-2 text-secondary">Objetivo</a></li>
                    <li><a href="./alunos.php" class="nav-link px-2 text-white">Alunos</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <div class="d-flex justify-content-center mt-4">
            <div class="card w-75">
                <div class="card-body">
                    <h5 class="card-title text-center">Objetivo</h5>
                    <p class="card-text" style="text-align: justify">
                        O objetivo deste projeto é desenvolver e implementar tecnologias assistivas que auxiliem indivíduos com deficiência visual na busca e acesso ao conhecimento. Queremos criar soluções que facilitem a navegação em plataformas digitais, a leitura de conteúdos online e o uso de aplicativos essenciais para a vida cotidiana. Nosso foco é proporcionar ferramentas que ampliem a autonomia dessas pessoas, permitindo-lhes participar mais ativamente do ambiente virtual e, consequentemente, da sociedade como um todo. Além disso, buscamos sensibilizar a comunidade tecnológica sobre a importância da acessibilidade e inclusão digital, incentivando o desenvolvimento contínuo de inovações nesse campo.
                    </p>
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