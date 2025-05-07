<?php
$nome = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
}
?>

<?php include 'header.php'; ?>

<h2>Formulário Simples</h2>
  <form method="post" class="mb-3">
    <div class="mb-3">
      <label class="form-label">Seu nome:</label>
      <input type="text" name="nome" class="form-control" />
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

  <?php if ($nome): ?>
    <div class="alert alert-success">Olá, <?php echo htmlspecialchars($nome); ?>!</div>
  <?php endif; ?>

<?php include 'footer.php'; ?>