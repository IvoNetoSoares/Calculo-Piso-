<html>
<head>
    <title>Cálculo de Azulejos</title>
</head>
<body>
    <h2>Calcular Número de Caixas de Azulejo</h2>
    <form action="calculo_azulejos.php" method="post">
        <label for="altura">Altura da parede (em metros):</label>
        <input type="text" id="altura" name="altura" required><br><br>

        <label for="largura">Largura da parede (em metros):</label>
        <input type="text" id="largura" name="largura" required><br><br>

        <label>Escolha o tamanho do revestimento:</label><br>
        <input type="radio" id="25x25" name="tamanho" value="25x25" required>
        <label for="25x25">25x25 cm</label><br>
        <input type="radio" id="30x30" name="tamanho" value="30x30">
        <label for="30x30">30x30 cm</label><br>
        <input type="radio" id="30x40" name="tamanho" value="30x40">
        <label for="30x40">30x40 cm</label><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>