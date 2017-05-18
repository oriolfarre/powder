<div class="container">
  <div class="row">
      <h1>Personalitzador</h1>
      <h2 class="h2-products">Total: {{ Session::get('preu') }} €</h2><a href="total/delete" class="btn btn-danger">Eliminar</a>
      <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal">Ajuda</button>
  </div>
</div>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajuda Powder</h4>
        </div>
        <div class="modal-body">
          <p>Per calcular el pressupos, simplement has d'anar afegint productes fent clic al botó "Afegir".
          automaticament et calcularà el total ldel preu.</p>
          <p>Per tornar a calcular un nou pressupost, pots fer clic al botó "Eliminar".</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
