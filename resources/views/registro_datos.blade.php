@extends("layouts.template_main")
@section("content")
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#"></a>
  </li>
  <li class="breadcrumb-item active">@lang("vista.first_item_dashboard")</li>
</ol>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#register-data" role="tab" aria-controls="home" aria-selected="true">@lang("vista.name_tab_register")</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#manage-estate" role="tab" aria-controls="profile" aria-selected="false">@lang("vista.name_tab_add_estate")</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#manage-data" role="tab" aria-controls="profile" aria-selected="false">@lang("vista.name_tab_update_data")</a>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="register-data" role="tabpanel" aria-labelledby="register-tab">
    <div class="card center" id="card-register">
    <div class="card-body">
      @include("manage.register_person")
    </div>
  </div>
  </div>
  <div class="tab-pane fade" id="manage-estate" role="tabpanel" aria-labelledby="manage-tab">
    <div class="card center" id="card-register">
     <div class="card-body">
      @include("manage.table_estate")
     </div>
   </div>
 </div>
  <div class="tab-pane fade" id="manage-data" role="tabpanel" aria-labelledby="manage-tab">
    <div class="card center" id="card-register">
     <div class="card-body">
      @include("manage.update_person")
     </div>
   </div>
  </div>
</div>
@endsection
