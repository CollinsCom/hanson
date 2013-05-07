<?php 
//***************************************************
//	Archivo de funciones para Pieles Hanson
//***************************************************
// # Para mostrar errores en pantalla: 
// php_value display_errors 1;

// # Para mostrar errores en el archivo de logs del servidor: 
// php_value log_errors 1;

include_once('conexion.php');
class sitioWeb{
	// $bd = new Conexion();
	function get_head(){
?>
		<!doctype html>
			<head>
				<meta charset="utf-8">
				<title>Hanson | pieles </title>
				
				<!-- archivos css -->
				<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
				
				<!-- archivos javascript -->
				<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
				<script type="text/javascript" src="js/libs.js"></script>
			
			</head>
			<body>
				<header>
					<img class="logo" src="img/logo.png" alt="Pieles Hanson">
					<nav>
						<ul>
							<li>Colecciones</li>
							<li>Historia</li>
							<li>Servicio</li>
							<li>Tienda</li>
							<li>Promociones</li>
							<li>Contacto</li>
						</ul>
					</nav>
				</header>
				<div id="wrap">
<?php 
	}//fin get_head
	function get_footer(){
?>
				</div><!-- fin del wrap -->
			<footer>
				
			</footer>
			<script type="text/javascript" src="js/validate.js"></script>
		</body>
	</html>
<?php  
	}//fin get_footer

	function index(){

	}//fin index 

	public function Deploy($page){
		$this->get_head();

		switch ($page) {
			case 'index':
				echo "estas en el index";
				$this->index();
				break;
		}

		$this->get_footer();
	}
} //fin de la clase SitioWeb
?>