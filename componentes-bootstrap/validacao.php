<?php
$mensagem = "";
$classe = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'] ?? '';
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $mensagem = "E-mail inválido!";
    $classe = "danger";
  } else {
    $mensagem = "E-mail enviado: " . htmlspecialchars($email);
    $classe = "success";
  }
}
?>

<?php include 'header.php'; ?>

<h2>Validação de E-mail</h2>
  <form method="post" class="mb-3">
    <div class="mb-3">
      <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail" required />
    </div>
    <button type="submit" class="btn btn-outline-primary">Enviar</button>
  </form>

  <?php if ($mensagem): ?>
    <div class="alert alert-<?php echo $classe; ?>"><?php echo $mensagem; ?></div>
  <?php endif; ?>

  <?php include 'footer.php'; ?>