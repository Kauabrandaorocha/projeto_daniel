<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Contato - Meu Site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Estilo -->
  <style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
    }

    .content {
        flex: 1 0 auto; /* Faz o conteúdo ocupar o espaço disponível */
        padding: 40px 0;
    }

    .footer {
        background-color: #222;
        color: #fff;
        padding: 20px 0;
        flex-shrink: 0; /* Não deixa o rodapé encolher */
    }

</style>

<!-- Conteúdo principal -->
<div class="container content">
  <h1>Contato</h1>
  <p>Você pode entrar em contato conosco pelos meios abaixo. Será um prazer atender você!</p>

  <div class="row">
    <div class="col-md-6">
      <h3>Endereço</h3>
      <p>Rua Severino de Almeida, 123<br>
      Bairro Centro<br>
      São Paulo, São Paulo - CEP 65438-159</p>

      <h3>Telefone</h3>
      <p>(11) 1234-5678<br>(11) 98765-4321</p>

      <h3>E-mail</h3>
      <p>contato@meusite.com.br</p>
    </div>

    <div class="col-md-6">
      <h3>Localização</h3>
      <!-- Mapa fictício do Google Maps -->
      <iframe src="https://maps.google.com/maps?q=Av.%20Paulista%2C%201000&t=&z=13&ie=UTF8&iwloc=&output=embed"
              width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="">
      </iframe>
    </div>
  </div>
</div>

<!-- Rodapé -->
<footer class="footer">
  <div class="container text-center">
    <p><strong>Meu site</strong></p>
    <ul class="list-inline">
      <li><a href="../index.php">Home</a></li>
      <li><a href="../quemsomos.php">Quem somos</a></li>
      <li><a href="../faleconosco.php">Fale conosco</a></li>
      <li><a href="../clientes.php">Clientes</a></li>
    </ul>
    <p class="small">© 2025 Meu site - Todos os direitos reservados</p>
  </div>
</footer>

</body>
</html>
