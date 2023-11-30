<!DOCTYPE html>
<html>
<head>
  <title>Gerenciamento de Candidatos</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div class="header">
    <h1>Gerenciamento de Candidatos</h1>
  </div>

  <div class="menu">
    <button id="btnListarCandidatos">Listar Candidatos</button>
    <button id="btnIncluirFiscais">Incluir Fiscais de Prova</button>
    <button id="btnAlterarSala">Alterar Sala de Prova</button>
  </div>

  <div class="content">
    <h2>Listar Candidatos Presentes</h2>
    <div id="resultado"></div>

    <h2>Incluir Fiscais de Prova</h2>
    <form id="formIncluirFiscais" action="incluirfiscaisAV2.php" method="POST">
      <label for="sala">Insira a sala de Prova:</label>
      <input type="number" name="sala" required><br>
      <label for="fiscal1">CPF do primeiro fiscal:</label>
      <input type="text" name="fiscal1" required><br>
      <label for="fiscal2">CPF do segundo fiscal:</label>
      <input type="text" name="fiscal2" required><br>
      <input type="submit" value="Incluir Fiscais Agora">
    </form>

    <h2>Alterar Sala de Prova</h2>
    <form id="formAlterarSala" action="alterarsalaAV2.php" method="POST">
      <label for="cpf">CPF do Candidato:</label>
      <input type="text" name="cpf" required><br>
      <label for="novaSala">Insira a nova sala da prova:</label>
      <input type="number" name="novaSala" required><br>
      <input type="submit" value="Alterar Sala Agora">
    </form>
  </div>

  <script>
    $(document).ready(function() {
      $('#btnListarCandidatos').click(function() {
        $.ajax({
          url: 'listarcandidatosAV2.php',
          type: 'GET',
          success: function(response) {
            $('#resultado').html(response);
          }
        });
      });

      $('#formIncluirFiscais').submit(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'incluirfiscaisAV2.php',
          type: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            alert(response);
          }
        });
      });

      $('#formAlterarSala').submit(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'alterarsalaAV2.php',
          type: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            alert(response);
          }
        });
      });
    });
  </script>
</body>
</html>
