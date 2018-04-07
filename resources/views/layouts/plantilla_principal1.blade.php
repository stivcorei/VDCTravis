<body class="fixed-nav sticky-footer color-lateral" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" id="mainNav">
    <a class="navbar-brand text-white" href="index.html">@lang("vista.name_company")</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" style="background-color: #e3f2fd;" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="@lang('vista.first_item_dashboard')">
           <a class="nav-link text-dark" href="datos_productor">
             <i class="fa fa-edit"></i>
             <span class="nav-link-text">@lang("vista.first_item_dashboard")</span>
           </a>
         </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler bg-info text-white">
        <li class="nav-item ">
          <a class="nav-link text-center " id="sidenavToggler">
            <i class="fa fa-angle-double-right"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-white" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>@lang("vista.logout")</a>
        </li>
      </ul>
    </div>
  </nav>
