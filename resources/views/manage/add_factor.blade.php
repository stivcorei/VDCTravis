<div class="card">
  <h5 class="card-header">Factor de rendimiento en base a 250gr</h5>
  <div class="card-body">
        <div class="form-row">
          <div class="col-md-2 mb-3">
            <label for="validationCustom01">Grano pasilla %</label>
            <input type="text"  onkeyup="factorRendimiento()"  class="factor form-control" id="pasilla-percentage" name="pasilla-percentage" placeholder="" value="0" required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="validationCustom02">Grano blanco %</label>
            <input type="text" onkeyup="factorRendimiento()" class="factor form-control" id="white-percentage" name="white-percentage" placeholder="" value="0" required>
          </div>
            <div class="col-md-3 mb-2">
            <label for="validationCustomUsername">Grano fermentado%</label>
            <div class="input-group">
            <input type="text" onkeyup="factorRendimiento()" class="factor form-control" name="fermented-percentage" value="0" id="fermented-percentage" required>
            </div>
          </div>
          <div class="col-md-3 mb-2">
          <label for="validationCustomUsername">Broca %</label>
          <div class="input-group">
          <input type="text" onkeyup="factorRendimiento()" class="factor form-control" name="borer" value="0" id="borer" required>
          </div>
        </div>
        <div class="col-md-3 mb-2">
        <label for="validationCustomUsername">Factor de rendimiento en kilos</label>
        <div class="input-group">
        <input type="text"  class="factor form-control" name="yield-factor" data-toggle="tooltip" title="Cantida de kilos requeridos" value="50" id="yield-factor" required>
        </div>
      </div>
        </div>
  </div>
</div>
