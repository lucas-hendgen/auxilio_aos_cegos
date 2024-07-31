<?php 
    include "../head.php"
?>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="../index.php" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="./justificativa.php" class="nav-link px-2 text-secondary">Justificativa</a></li>
                    <li><a href="./objetivo.php" class="nav-link px-2 text-white">Objetivo</a></li>
                    <li><a href="./alunos.php" class="nav-link px-2 text-white">Alunos</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <div class="d-flex justify-content-center mt-4">
            <div class="card w-75">
                <div class="card-body">
                    <h5 class="card-title text-center">Justificativa</h5>
                    <p class="card-text" style="text-align: justify">
                        A tecnologia tem o potencial de transformar a vida de pessoas com deficiência visual, proporcionando-lhes ferramentas que aumentem sua independência e inclusão social. A falta de acessibilidade em muitos recursos tecnológicos atuais limita as oportunidades de aprendizado, comunicação e participação plena na sociedade. Portanto, é fundamental desenvolver e implementar soluções tecnológicas que permitam a essas pessoas acessarem informações, serviços e redes sociais de maneira eficiente e autônoma. Ao promover a inclusão digital, contribuímos para uma sociedade mais justa e igualitária, onde todos possam exercer seus direitos e potencialidades.
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