<?php require('require.php'); ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
	<div class="navbar-header">
	  <ul class="nav navbar-nav" id="menu">
		<li class="active dropdown" >
			<a class="navbar-brand dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >MENU<span class="caret" id="sapn"></span></a>
			<?php
				echo View::load('menuvar');
			?>
		</li>
	  </ul>
    </div>
	<div id="navbar" class="col-md-2 col-md-offset-5">			
		<a class="navbar-brand" href='javascript:history.back()'>( < )</a>
		<a class="navbar-brand" href='javascript:history.forward()'>( > )</a>			
	</div>
	<div id="navbar" class="navbar-collapse collapse">
		
		<div id="navbar" class="navbar-right">
			<a class="navbar-brand" ><?PHP echo date('d / m / Y'); ?> <script>inicio()</script></a>
		</div>
		<form class="navbar-form navbar-right">
			<input type="text" class="form-control" placeholder="Search...">
		</form>
    </div>
  </div>  
</nav>

