<?php include 'dados.php'; ?>
<?php include 'header.php'; ?>
<h2>Usuários</h2>
  <table class="table table-striped">
    <thead>
      <tr><th>Nome</th><th>Email</th></tr>
    </thead>
    <tbody>
      <?php foreach ($usuarios as $user): ?>
        <tr>
          <td><?php echo $user['nome']; ?></td>
          <td><?php echo $user['email']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php include 'footer.php'; ?>