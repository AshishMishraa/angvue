<!-- Left Side Of Navbar -->

<li class="dropdown">
  <!-- User Photo / Name -->
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Monitors</a>  
  <ul class="dropdown-menu" role="menu">
      <!-- View -->
      <li class="dropdown-header">View</li>
      <li>
          <a href="/my-monitors">
              <i class="fa fa-fw fa-btn fa-user"></i>My Monitors
          </a>
      </li>
      <li>
          <a href="/monitors">
              <i class="fa fa-fw fa-btn fa-users"></i>{{ Spark::teamString() }} Monitors
          </a>
      </li>
      <li class="divider"></li>
      <!--Create-->
      <li class="dropdown-header">Create</li>
      <li>
          <a href="/monitors">
              <i class="fa fa-fw fa-btn fa-plus"></i>New Monitor
          </a>
      </li>
  </ul>
</li>
<li>
    <a href="/clients">
        <i class="fa fa-fw fa-btn fa-users"></i>Clients
    </a>
</li>
