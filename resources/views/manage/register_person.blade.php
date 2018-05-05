<form action="create_data" method="post">
  {{ csrf_field() }}
 <div class="row">
    <div class="col col-lg-4">

    </div>
  </div>
<div>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">@lang("vista.names")</label>
        <input type="text" onkeypress="return onlyLetters(event)" class="form-control" id="names" name="names" placeholder="" value="@isset($name){{$name}}@endisset" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">@lang("vista.last_name")</label>
        <input type="text" onkeypress="return onlyLetters(event)" class="form-control" id="last-names" name="last-names" placeholder="" value="@isset($last_name){{$last_name}}@endisset" required>
      </div>
      <div class="col-md-2 mb-3">
      <label>@lang("vista.type_identicication")</label>
        <div class="input-group">
          <select  name="type-identification">
            @if(isset($type_identification))

              @foreach($identificationType as $identificationType)
                @if($type_identification == $identificationType->id)

                  <option value="{{$identificationType->id}}" selected>{{$identificationType->identification_type}}</option>
                @else
                    <option value="{{$identificationType->id}}">{{$identificationType->identification_type}}</option>
                @endif
              @endforeach

            @else
              @foreach($identificationType as $identificationType)
               <option value="{{$identificationType->id}}">{{$identificationType->identification_type}}</option>
              @endforeach
            @endif
          </select>
        </div>
      </div>

      <div class="col-md-2 mb-2">
        <label for="validationCustomUsername">@lang("vista.identification_card")</label>
        <div class="input-group">
        <input type="text" onkeypress="return onlyNumber(event)" class="form-control" name="identification-card" value="@isset($identification){{$identification}}@endisset" id="identification-card" required>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-2 mb-3">
        <label for="validationCustomUsername">@lang("vista.telephone")</label>
        <div class="input-group">
          <input type="text" onkeypress="return onlyNumber(event)" class="form-control" id="telephone" name="telephone" placeholder="" value="@isset($telephone){{$telephone}}@endisset" aria-describedby="inputGroupPrepend" required>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom03">@lang("vista.address")</label>
        <input type="text" class="form-control" id="address" name="address" value="@isset($address){{$address}}@endisset" placeholder="" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom04">@lang("vista.email")</label>
        <input type="text" class="form-control" id="email" name="email" value="@isset($email){{$email}}@endisset" placeholder="" required>
      </div>
      <div class="col-md-3 mb-3">
      <label>@lang("vista.type_user")</label>
      <div class="input-group">
  <select onchange="this.form.submit('')" name="type-user">
      @if(isset($typeUser))
        @if($typeUser == 1)
          @foreach($userType as $userType )
            @if($typeUser == $userType->id)
              <option value="{{$userType->id}}" selected>{{$userType->name}}</option>
            @else
              <option value="{{$userType->id}}">{{$userType->name}}</option>
            @endif
          @endforeach
        @endif

        @if($typeUser == 2)
          @foreach($userType as $userType )
            @if($typeUser == $userType->id)
              <option value="{{$userType->id}}" selected>{{$userType->name}}</option>
            @else
              <option value="{{$userType->id}}">{{$userType->name}}</option>
            @endif
          @endforeach
        @endif

        @if($typeUser == 3)
          @foreach($userType as $userType )
            @if($typeUser == $userType->id)
              <option value="{{$userType->id}}" selected>{{$userType->name}}</option>
            @else
              <option value="{{$userType->id}}">{{$userType->name}}</option>
            @endif
          @endforeach
        @endif
      @else
        @foreach($userType as $userType )
          <option value="{{$userType->id}}">{{$userType->name}}</option>
        @endforeach
      @endif
      </select>
    </div>
        </div>
        <div class="col-md-4 mb-3">
          @if(isset($typeUser))
            @if($typeUser == 1)
            <label>@lang("vista.type_user")</label>
            <div class="input-group">
              <select  name="employee-role">
                @foreach($employeeRole as $employeeRole )
                  <option value="{{$employeeRole->id}}">{{$employeeRole->name}}</option>
                @endforeach
              </select>
            </div>
            @endif
            @else
            <label>@lang("vista.type_user")</label>
            <div class="input-group">
            <select  name="employee-role">
              @foreach($employeeRole as $employeeRole )
              <option value="{{$employeeRole->id}}">{{$employeeRole->name}}</option>
              @endforeach
            </select>
          </div>
          @endif

        </div>
    </div>

    @if(isset($typeUser))
      @if($typeUser == 2)
       @include("manage.add_estate")
      @endif
    @endif
  <br>
    <button class="btn btn-primary" name="save" value="save" type="submit">@lang("vista.button_save")</button>
  </form>
</div>
