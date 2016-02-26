<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
	
	<!-- User Dropdown -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">

          <!-- The DropDown Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          	Hello, {{ Auth::user()->name }} 
          	<span class="caret"></span>
          </a>
			
		  <!-- Drop Down Content -->
          <ul class="dropdown-menu">
            <li>
            	<a href="/logout">
            		<span class="glyphicon glyphicon-log-out"></span>
            		Logout 
            	</a>
            </li>
          </ul>

        </li>
      </ul>
  
  </div>
</nav>