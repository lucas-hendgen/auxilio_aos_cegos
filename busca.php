<script>
    function handleKeyPress(event) {
        // Verifica se a tecla pressionada é a tecla Enter (código 13)
        if (event.keyCode === 13) {
            buscarProduto();
        }
    }

    function buscarProduto() {
        // Captura o valor do campo de input
        let produto = document.getElementById('buscar_produto').value;

        // Verifica se o produto é vazio ou nulo
        if (!produto) {
            // Caso seja vazio ou nulo, executa uma ação, por exemplo:
            alert('Por favor, digite um produto para buscar.');

        } else {
            produto2 = removerEspacosPontosAcentos(produto);

            switch (produto2) {
                case "aguasanitaria":
                    window.location.href = '../produtos/agua_sanitaria.php';
                    break;

                case "leitecondensado":
                    window.location.href = '../produtos/leite_condensado.php';
                    break;

                case "leite":
                    window.location.href = '../produtos/leite.php';
                    break;

                case "desinfetante":
                    window.location.href = '../produtos/desinfetante.php';
                    break;

                case "sabaoempo":
                    window.location.href = '../produtos/sabao_em_po.php';
                    break;

                case "arroz":
                    window.location.href = '../produtos/arroz.php';
                    break;

                case "massa":
                    window.location.href = '../produtos/massa.php';
                    break;

                case "bolacha":
                    window.location.href = '../produtos/bolacha.php';
                    break;

                case "cafe":
                    window.location.href = '../produtos/cafe.php';
                    break;

                case "pao":
                    window.location.href = '../produtos/pao.php';
                    break;

                default:
                    window.location.href = '../produtos/nao_encontrado.php';
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