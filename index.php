<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="pai">
    
    <div class="calcular">
    
      <form method="POST" action="calculator.php">
      <h1>Calculadora Simples</h1>
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="number1" required placeholder="Digite seu primeiro numero">

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="number2" required placeholder="Digite seu segundo numero">

        <label for="operation">Operação:</label>
        <select name="operation" id="operation" required>
          <option value="adicao">Adição</option>
          <option value="subtracao">Subtração</option>
          <option value="multiplicacao">Multiplicação</option>
          <option value="divisao">Divisão</option>
        </select>

        <button type="submit">Calcular</button>
      </form>
    </div>
  </div>
</body>

</html>