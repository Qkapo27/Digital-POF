<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=escuela', 'root', '');
    echo "Conectado";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<?php
	$URL='http://localhost/PP-DB/';
		//Create-Read-Update-Delete
			class crud{
				private $servidor = "localhost";//Nombre del servidor
				private $usuario = "root";//Nombre de usuario
				private $bd = "escuela";//Nombre de Base de Dato
				private $password = "";//Contraseña
		//Conexion con CRUD
			public function conectar(){
				$conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->bd);
				return $conexion;
			}
		//Create
			public function insertarDatos($datos){
				//CONEXION
				$con = $this->conectar();
				//Subir a base de datos
				$sql = "INSERT INTO pof(`DNI`, `Nombre`, `Apellido`, `CAR`, `Agrupamiento`, `S`, `Asignatura`, `Hs`, `Curso`, `Division`, `Ciclo`, `Turno`, `F-Ingreso`, `OBS`) VALUES ('$datos[0]', '$datos[1]', '$datos[2]','$datos[3]', '$datos[4]', '$datos[5]','$datos[6]', '$datos[7]', '$datos[8]','$datos[9]', '$datos[10]', '$datos[11]', '$datos[12]', '$datos[13]')";			
				$rs = mysqli_query($con, $sql);
				//
				header('location:../../Layout/Admin/POF.Php');
			}
		//Read
			public function mostrarDatos($id){
				$con = $this->conectar();
				if ($id==0) {
					$sql = "SELECT * FROM pof";
					$rs = mysqli_query($con, $sql);
					return $fila = mysqli_fetch_all($rs, MYSQLI_ASSOC);
				}
				else {
					$sql = "SELECT * FROM pof WHERE Id=$id";
					$rs = mysqli_query($con, $sql);
					return $fila = mysqli_fetch_array($rs, MYSQLI_ASSOC);
				}		
			}
		//Update
			public function actualizarDatos($id, $datos){
				$con = $this->conectar();
				// include "../../App/Config/config.php";

				$sql = "UPDATE `pof` SET `DNI`='$datos[0]',`Nombre`='$datos[1]',`Apellido`='$datos[2]',`CAR`='$datos[3]',`Agrupamiento`='$datos[4]',`S`='$datos[5]',`Asignatura`='$datos[6]',`Hs`='$datos[7]',`Curso`='$datos[8]',`Division`='$datos[9]',`Ciclo`='$datos[10]',`Turno`='$datos[11]',`F-Ingreso`='$datos[12]',`OBS`='$datos[13]' WHERE Id=$id";
				$rs = mysqli_query($con, $sql);
			}
		//Delete
			public function eliminarDatos($id){
				$con = $this->conectar();

				$sql = "DELETE FROM pof WHERE Id=$id";
				
				$rs = mysqli_query($con, $sql);
				}
			}
?>