<?php
include "./head.php"
?>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./index.php" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="./navBar/justificativa.php" class="nav-link px-2 text-white">Justificativa</a></li>
                    <li><a href="./navBar/objetivo.php" class="nav-link px-2 text-white">Objetivo</a></li>
                    <li><a href="./navBar/alunos.php" class="nav-link px-2 text-white">Alunos</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <form class="d-flex flex-row my-4">
            <div class="form-group mx-sm-3 m-2 col-7">
                <input type="text" class="form-control" id="buscar_produto" placeholder="Produto" onkeydown="handleKeyPress(event)">
            </div>
            <button type="button" class="btn btn-primary m-2 col-4" onclick="buscarProduto()">Buscar</button>
        </form>
    </main>

    <?php
    include "./footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script>
        function handleKeyPress(event) {
            // Verifica se a tecla pressionada é a tecla Enter (código 13)
            if (event.key === 'Enter') {
                let produtoenter = document.getElementById('buscar_produto').value;
                buscarProduto(produtoenter);
            }
        }

        function buscarProduto(produtoenter) {
            if (!produtoenter) {
                // Captura o valor do campo de input
                let produto = document.getElementById('buscar_produto').value;
            } else {
                produto = produtoenter;
            }

            // Verifica se o produto é vazio ou nulo
            if (!produto) {
                // Caso seja vazio ou nulo, executa uma ação, por exemplo:
                alert('Por favor, digite um produto para buscar.');

            } else {
                produto2 = removerEspacosPontosAcentos(produto);

                switch (produto2) {
                    case "aguasanitaria":
                        window.location.href = './produtos/agua_sanitaria.php';
                        break;

                    case "leitecondensado":
                        window.location.href = './produtos/leite_condensado.php';
                        break;

                    case "leite":
                        window.location.href = './produtos/leite.php';
                        break;

                    case "desinfetante":
                        window.location.href = './produtos/desinfetante.php';
                        break;

                    case "sabaoempo":
                        window.location.href = './produtos/sabao_em_po.php';
                        break;

                    case "arroz":
                        window.location.href = './produtos/arroz.php';
                        break;

                    case "massa":
                        window.location.href = './produtos/massa.php';
                        break;

                    case "bolacha":
                        window.location.href = './produtos/bolacha.php';
                        break;

                    case "cafe":
                        window.location.href = './produtos/cafe.php';
                        break;

                    case "pao":
                        window.location.href = './produtos/pao.php';
                        break;

                    default:
                        window.location.href = './produtos/nao_encontrado.php';
                        break;

                }
            }
        }

        function removerEspacosPontosAcentos(str) {
            // Remove espaços em branco e pontos
            str = str.replace(/ /g, '').replace(/\./g, '');

            // Remove acentos e caracteres especiais
            str = str.normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase();

            return str;
        }
    </script>

</body>

</html>