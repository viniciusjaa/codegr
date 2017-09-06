
				//SULFIXO "0"
				
				$algs = array(); //array para algarismos
				$sequencia = array(); //array para gravar todos os números
				
				for ($i=1; $i=$_POST['qtd']; $i++) {
					$sequencia[$i] = $i; // Salvar número para uso posterior.
					
					// Extração de algarismos
					for ($j = 9; $j = 1; $j--) {
						$algs[$j] = substr($, $j, 1); //
						
					}
					// strlen($_POST['']);
					// Aplicar multiplicação entre variante e algarismo
					for ($i = 10; $; $i--) {
						
					// Se ímpar, multiplicar por dois
						if ($i % 2 <> 0) {
							$passo3[$i] = $algs[$i] * 2;
						} else {
							$passo3[$i] = $algs[$i];
						}

						// Se maior que 9, 
						if ($algs[$i] >9) {
							$passo3[$i] = substr($algs[$i], 1, 1);
						} else {
							$passo3[$i] = 0;
						}
						
						// Se maior que 9, 
						if ($algs[$i] >9) {
							$passo3[$i] = substr($algs[$i], 1, 1);
						} else {
							$passo3[$i] = 0;
						}
					}

					for ($i = 1; $strlen($)){
						$file = fopen($_POST('op')+".csv","w");
					}
				} 
		/*
			is_numeric();

			$nameErr = $emailErr = $genderErr = $websiteErr = "";
			$name = $email = $gender = $comment = $website = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {

				if (empty($_POST["op"])) {
					$opErr = "É obrigatório informar a OP.";
				} else {
					$op = test_input($_POST["op"]);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
						$nameErr = "Only letters and white space allowed"; 
					}
				}

				if (empty($_POST["qtd"])) {
					$qtdErr = "Insira a quantidade.";
				
					
				}
				

				if (empty($_POST["comment"])) {
					$comment = "";
				} else {
					$comment = test_input($_POST["comment"]);
				} 
			}
			
			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		*/
					
					
					
					// fputcsv($file,explode('; ',);
			
