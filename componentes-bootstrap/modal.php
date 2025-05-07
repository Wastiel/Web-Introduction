<?php include 'dados.php'; ?>
<?php include 'header.php'; ?>

<h2>Modal com Bootstrap</h2>

  <!-- Botão para abrir o modal -->
  <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#meuModal">Abrir Modal</button>

  <!-- Modal Bootstrap -->
  <div class="modal fade" id="meuModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Mensagem</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <?php echo $mensagem; ?>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>