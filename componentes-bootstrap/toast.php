
<?php include 'dados.php'; ?>
<?php include 'header.php'; ?>
<h2>Toast com Bootstrap</h2>

<button class="btn btn-success" onclick="mostrarToast()">Mostrar Toast</button>

<!-- Toast Bootstrap -->
<div id="meuToast" class="toast position-fixed top-0 end-0 m-3" role="alert">
  <div class="toast-header">
    <strong class="me-auto">Aviso</strong>
    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
  </div>
  <div class="toast-body">
    <?php echo $mensagem; ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function mostrarToast() {
    const toast = new bootstrap.Toast(document.getElementById('meuToast'));
    toast.show();
  }
</script>
<?php include 'footer.php'; ?>