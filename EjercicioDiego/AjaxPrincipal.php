<?php  


if(isset($_POST['grado'])){
	

	$miGrado = $_POST['grado'];

	if(!$miGrado == ""){ 

			$arrPrimero = array('A', 'B', 'C' );
			$arrSegundo = array('A', 'C' );
			
			$arrRecorrer ;


			$miSelect = "<strong>Seleccione Curso </strong>";

			if($miGrado == 'primero'){
				$arrRecorrer = $arrPrimero;
			}else if ($miGrado == 'segundo'){
				$arrRecorrer = $arrSegundo;
			} 
		 
			$miSelect .= "<select id='curso' name='curso'>";

			$miSelect .= "<option value= ''>Seleccione Curso</option>";
		 
			foreach ($arrRecorrer as $nombre) {
				$miSelect .= "<option value=".$nombre.">".$nombre."</option>";
			}
			$miSelect .= "</select>";
			
			echo $miSelect;
	}
	
 
}



if(isset($_POST['curso'])){

 		$curso  = $_POST['curso'];
 		$grado = $_POST['grado3'];

 		if(!$curso == ""){

 			if($grado == "primero"){

		 		$A = array('Danzas', 'Teatro', 'Dibujo' );
				$B = array('Danzas', 'Musica' );
				$C = array('Teatro', 'Dibujo', 'Musica' );
				

			}else if($grado == "segundo"){

				$A = array(  'Teatro', 'Dibujo' );
				$C = array('Teatro',   'Musica' );

			}

			$arrRecorrer2  ;
				


				$mando = "<strong>Seleccione Materia </strong>"  ;

				if($curso == 'A' ){
			 		$arrRecorrer2 = $A;
				} else if($curso == 'B' ){
			 		$arrRecorrer2 = $B;
				} else if($curso == 'C' ){
			 		$arrRecorrer2 = $C;
				}




				 $mando.= "<select id='materia' name='materia' required> ";

				 	$mando .= "<option value= '' > Seleccione  </option>";

					foreach ($arrRecorrer2 as $nombre) {
						$mando.= "<option value=".$nombre.">".$nombre."</option>";
					}

					$mando .= "</select>  ";
					
					echo $mando;
		}

	}		


	if(isset($_POST['materia'])){

		$materia = $_POST['materia'];
		
		if(!$materia == ""){  


				$nombre = $_POST["nombre"];

		 		$apellido = $_POST["apellido"];
		 		$valor = $_POST["valor"];
		 		$grado = $_POST["grado2"];
		 

		 		

		 		if($grado == "primero"){
		 			$valor += 35000;

		 		}
		 		if($grado == "segundo"){
		 			$valor += 70000;

		 		}

		 		if($materia == "Danzas"){

		 			$valor +=  ($valor * 0.2)  ;
		 		}

		 		if($materia == "Musica"){

		 			$valor +=  ($valor * 0.3)  ;
		 		}
		 		if($materia == "Dibujo"){

		 			$valor +=  ($valor * 0.35)  ;
		 		}


		 		echo "<br><br>El valor de matricula del alumno ".$nombre." ".$apellido." es ".$valor;

 		}
 	}
 


?>