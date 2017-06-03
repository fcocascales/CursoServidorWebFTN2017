<h2><?= ucfirst($tipo) ?></h2>
<p class="<?= $tipo ?>"><?= htmlspecialchars($mensaje) ?></p>
<style>
  .info { color: darkblue; }
  .error { color: darkred; }
</style>
<p>
  <a href="<?= site_url().'/'.$this->uri->segment(1) ?>">Volver</a>
</p>
