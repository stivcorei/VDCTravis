    <div class="card">
      <h5 class="card-header">Datos del lote</h5>
      <div class="card-body">

            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Fecha ingreso</label>
                <input type="text" class="form-control" id="input-date" name="input-date" placeholder="" value="" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom02">Número de kilos</label>
                <input type="text" onkeypress="return onlyNumberId(event)" class="form-control" id="kilos-number" name="kilos-number" placeholder="" value="" required>
              </div>
                <div class="col-md-2 mb-2">
                <label for="validationCustomUsername">Kilos disponibles</label>
                <div class="input-group">
                <input type="text" onkeypress="return onlyNumberId(event)" class="form-control" name="avaible-kilos" value="" id="avaible-kilos" required>
                </div>
              </div>
            </div>
      </div>
    </div>
