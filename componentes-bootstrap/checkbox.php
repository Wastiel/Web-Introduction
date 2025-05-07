<?php
$escolhas = $_POST['comidas'] ?? [];
?>

<?php include 'dados.php'; ?>
<?php include 'header.php'; ?>

<h2>Escolha as comidas</h2>
  <form method="post" class="mb-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="comidas[]" value="Pizza" id="pizza">
      <label class="form-check-label" for="pizza">Pizza</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="comidas[]" value="Hambúrguer" id="hamburguer">
      <label class="form-check-label" for="hamburguer">Hambúrguer</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="comidas[]" value="Sushi" id="sushi">
      <label class="form-check-label" for="sushi">Sushi</label>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Enviar</button>
  </form>

  <?php if ($escolhas): ?>
    <div class="alert alert-info">
      <strong>Você escolheu:</strong>
      <ul class="mb-0">
        <?php foreach ($escolhas as $item): ?>
          <li><?php echo $item; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <?php include 'footer.php'; ?>