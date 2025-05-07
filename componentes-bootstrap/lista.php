<?php include 'dados.php'; ?>
<?php include 'header.php'; ?>

<h2>Lista de Compras</h2>
  <ul class="list-group">
    <?php foreach ($itens as $item): ?>
      <li class="list-group-item"><?php echo $item; ?></li>
    <?php endforeach; ?>
  </ul>
  <?php include 'footer.php'; ?>