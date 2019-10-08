<aside class="main-sidebar elevation-4 barra-izquierda collapsado sidebar-open" id="barra" style="" >
	<!-- Brand Logo -->
	<a href="{{ url('evaluacion') }}" class="brand-link" style="background: #ea0609 ">
		<img src="{{ asset('img/logosantander.png') }}" alt="AdminLTE Logo" class=""
		style="opacity: .8;width: 200px">
		<span class="brand-text font-weight-light"> </span>
	</a>

	<!-- Sidebar -->
	<div  class="sidebar font-weight-light" style="background: #ea0609" >
		<!-- Sidebar user panel (optional) -->
		
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<a href="#">
					<div class="image">
						
								<!-- <img id='perfilImg' src="" class="" alt="User Image">
							
								<img id='perfilImg' src="" class="" alt="User Image"><small class="ml-4"></small> -->
						
					</div>
				</a>	
			</div>
		

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column"  data-widget="treeview" role="menu" data-accordion="false">					
				<li class="nav-item" >
					<a  href="{{ route('docentesdc') }}" class="nav-link" ><i class="far fa-address-book"></i>  <p>Clientes</p></a>
				</li>
				<li class="nav-item" >
					<a  href="{{ route('carrerascc') }}" class="nav-link" ><i class="far fa-address-book"></i> <p>Promociones</p></a>
				</li>
				<li class="nav-item" >
					<a  href="{{ route('criteriosc') }}" class="nav-link" ><i class="far fa-address-book"></i> <p>Clientes TDC</p></a>
				</li>
				<li class="nav-item" >
					<a  href="{{ route('frecuenciasf') }}" class="nav-link" ><i class="fas fa-cogs"></i><p>Clientes TDD</p></a>
				</li>
				<li class="nav-item" >
					<a  href="{{ route('evaluacion') }}" class="nav-link" ><i class="fas fa-atlas"></i><p>Personas con promoción</p></a>
				</li>
				<!-- <li class="nav-item" >
					<a  href="" class="nav-link" ><i class="far fa-arrow-alt-circle-up"></i><p>Cargar Docentes</p></a>
				</li> -->
				<!-- <li class="nav-item" >
					<a  href="" class="nav-link" ><i class="fas fa-atlas"></i> <p>Evaluacion Docente</p></a>
				</li> -->
				<li class="nav-item" >
					<a  href="" class="nav-link" ><i class="nav-icon fas fa-file-excel"></i> <p>Reportes</p></a>
				</li>

			</ul>
		</nav>
		
		<!-- /.sidebar-menu -->
	</div>
		<!-- /.sidebar -->
</aside>
<script>
$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip(); 
});
</script>