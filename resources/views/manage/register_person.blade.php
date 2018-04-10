<form action="option_selected" method="post">
  {{ csrf_field() }}
 <div class="row">
    <div class="col col-lg-4">

    </div>
  </div>
<div>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">@lang("vista.names")</label>
        <input type="text" class="form-control" id="names" name="names" placeholder="" value="" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">@lang("vista.last_name")</label>
        <input type="text" class="form-control" id="last-name" name="last-name" placeholder="" value="" required>
      </div>
      <div class="col-md-2 mb-2">
        <label for="validationCustomUsername">@lang("vista.identification_card")</label>
        <div class="input-group">
        <input type="text" class="form-control" name="identification_card" value="@isset($identification){{$identification}}@endisset" id="identification_card" required>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustomUsername">@lang("vista.telephone")</label>
        <div class="input-group">
          <input type="text" class="form-control" id="telephone" name="telephone" placeholder="" aria-describedby="inputGroupPrepend" required>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom03">@lang("vista.address")</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom04">@lang("vista.email")</label>
        <input type="text" class="form-control" id="email" name="address" placeholder="" required>
      </div>
      <div class="col-md-4 mb-3">
      <label>@lang("vista.type_user")</label>
      <div class="input-group">
  <select onchange="this.form.submit()" name="type-user">
      @if(isset($user))
        @if($user == 1)
        <option value="1" selected>
          Empleado
        </option>
        <option value="2">
          Caficultor
        </option>
        <option  value="3">
          Cliente
        </option>
        @endif
        @if($user == 2)
        <option value="1">
          Empleado
        </option>
        <option value="2" selected>
          Caficultor
        </option>
        <option  value="3">
          Cliente
        </option>
        @endif
        @if($user == 3)
        <option value="1">
          Empleado
        </option>
        <option value="2">
          Caficultor
        </option>
        <option  value="3" selected>
          Cliente
        </option>
        @endif
      @else
      <option value="1">
        Empleado
      </option>
      <option value="2">
        Caficultor
      </option>
      <option  value="3">
        Cliente
      </option>
      @endif
      </select>
    </div>
        </div>
    </div>

    @if(isset($user))
      @if($user == 2)
       @include("manage.add_estate")
      @endif
    @endif
  <br>
    <button class="btn btn-primary" type="submit">@lang("vista.button_save")</button>
  </form>
</div>
