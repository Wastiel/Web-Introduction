<?php
$escolha = $_POST['fruta'] ?? '';
?>
<?php include 'dados.php'; ?>
<?php include 'header.php'; ?>

<h2>Escolha uma fruta</h2>
  <form method="post" class="mb-3">
    <div class="mb-3">
      <select name="fruta" class="form-select">
        <option value="">Selecione...</option>
        <option value="maçã">Maçã</option>
        <option value="banana">Banana</option>
        <option value="laranja">Laranja</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Confirmar</button>
  </form>

  <?php if ($escolha): ?>
    <div class="alert alert-secondary">Você escolheu: <strong><?php echo $escolha; ?></strong></div>
  <?php endif; ?>

  <?php include 'footer.php'; ?>