<body class="bg-secondary">
<div class="card mx-auto" style="width: 20rem;">
  <div class="card-header text-center">
    <h3>@lang("vista.title_session")</h3>
  </div>
  <div class="card-body">
    <div class="form-group">
      <label for="formGroupExampleInput">@lang("vista.label_user")</label>
      <input type="text" class="form-control" id="" placeholder="" required>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">@lang("vista.label_password")</label>
      <input type="password" class="form-control" id="" placeholder="" required>
    </div>
    <div class="form-group text-center">
          <!-- <button type="button" class="btn btn-primary">@lang("vista.button_enter")</button> -->
          <a class="btn btn-info" href="datos_productor">@lang("vista.button_enter")</a>
      </div>


  </div>
  <div class="card-footer text-muted">
   <a class="text-info" href="">@lang("vista.forget")</a>
  </div>
</div>
