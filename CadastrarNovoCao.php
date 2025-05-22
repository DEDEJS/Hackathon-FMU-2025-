
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Cadastro De Cachorro</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
</head>
<body>
 <nav>
  <ul>
    <li><a href="index.php" title="Página Inicial" >Página Inicial</a></li>
    <li><a href="Classificacao.php" title="Classificacao">Cães</a></li>
    <li><a href="CadastrarNovoCao.php" title="Cadastrar Novo Cão" class="BorderNav">Cadastrar Novo Cão</a></li>
  </ul>
 </nav>
<section class="Cadastro">
<form action="#" method="post">
<div>
    <p class="error"></p>
 <input type="text" placeholder="Raça:" name="Raca" id="Raca">
</div>
<div>
    <p class="error"></p>
 <input type="text" placeholder="Sexo:" name="Sexo" id="Sexo">
</div>
<div>
    <p class="error"></p>
 <input type="text" placeholder="Peso:" name="Peso" id="Peso">
</div>
 <div>
    <p class="error"></p>
    <select name="Classificacao" id="Classificacao">
        <option>---</option>
        <option>Vermelho</option>
        <option>Laranja</option>
        <option>Amarelo</option>
        <option>Verde</option>
        <option>Azul</option>
    </select>
</div>
<input type="submit" value="Cadastrar">
</form>
</section>
</body>
</html>
