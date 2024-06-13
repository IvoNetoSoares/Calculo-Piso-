<?php
 // é necessario que voce usa o newtab para funcionar perfeitamente//

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtendo os dados do formulário
    $altura = floatval($_POST['altura']);
    $largura = floatval($_POST['largura']);
    $tamanho = $_POST['tamanho'];

    // Convertendo as medidas da parede para centímetros
    $altura_cm = $altura * 100;
    $largura_cm = $largura * 100;

    // Determinando o tamanho do azulejo em cm²
    if ($tamanho == "25x25") {
        $area_azulejo = 25 * 25;
    } elseif ($tamanho == "30x30") {
        $area_azulejo = 30 * 30;
    } elseif ($tamanho == "30x40") {
        $area_azulejo = 30 * 40;
    }

    // Calculando a área total da parede em cm²
    $area_parede = $altura_cm * $largura_cm;

    // Calculando o número total de azulejos necessários
    $numero_azulejos = ceil($area_parede / $area_azulejo);

    // Calculando o número de caixas necessárias (10 azulejos por caixa)
    $numero_caixas = ceil($numero_azulejos / 10);

    // Exibindo o resultado
    echo "<h2>Resultado</h2>";
    echo "Área da parede: " . $area_parede . " cm²<br>";
    echo "Número de azulejos necessários: " . $numero_azulejos . "<br>";
    echo "Número de caixas necessárias: " . $numero_caixas . "<br>";
}
?>