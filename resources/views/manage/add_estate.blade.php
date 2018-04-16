<div class="card center" id="card-register">
  <div class="card-header">
    <B>@lang("vista.title_estate")</B>
  </div>
<div class="card-body">
<div class="row">
  <div class="col col-lg-4">
  </div>
</div>
<div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">@lang("vista.names_estate")</label>
      <input type="text" onkeypress="return onlyLetters(event)"  class="form-control" id="names-estate" name="names-estate" placeholder="" value="" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom02">@lang("vista.address_estate")</label>
      <input type="text" class="form-control" id="address-estate" name="address-estate" placeholder="" value="" required>
    </div>
    <div class="col-md-2 mb-2">
      <label for="validationCustomUsername">@lang("vista.altitude_estate")</label>
      <div class="input-group">
      <input type="text" class="form-control" name="altitude-estate" value="" id="altitude-estate" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">@lang("vista.city_estate")</label>
        <div class="input-group">
      <select  id="city-estate" name="city-estate" required>
        @if(isset($municipalities))
        @foreach($municipalities as $municipalities)
         <option value="{{$municipalities->id}}">{{$municipalities->name}}</option>
        @endforeach
         @endif
      </select>
    </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustomUsername">@lang("vista.vereda_estate")</label>
      <div class="input-group">
        <input type="text" class="form-control" id="vereda-estate" name="vereda-estate" placeholder="" aria-describedby="inputGroupPrepend" required>
      </div>
    </div>
  </div>
</div>
</div>
</div>
