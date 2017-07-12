<?php 

	$hierarquia = array(
		array(
			'nome_cargo'=>'CEO',
			'subordinados'=>array(
				//Inicio: DIRETOR COMERCIAL
				array(
					'nome_cargo'=> 'Diretor Comercial',
					'subordinados'=> array(
						// Inicio: GERENTE DE VENTAS
						array(
							'nome_cargo'=>'Gerente de Vendas',
							'subordinados'=> array(
								// Inicio: SUB TESTE
								array(
									'nome_cargo'=> 'Cargo Teste I'
								),
								array(
									'nome_cargo'=> 'Cargo Teste II'
								)
								// Termino: SUB TESTE
							)
						)
						// Termino: GERENTE DE VENTAS
					)
				),
				//Termino: DIRETOR COMERCIAL
				//Inicio: DIRETOR FINANCEIRO
				array(
					'nome_cargo'=> 'Diretor Financeiro',
					'subordinados'=> array(
						// Inicio: GERENTE DE CONTAS A PAGAR
						array(
							'nome_cargo'=> 'Gerente de Contas a Pagar',
							'subordinados'=> array(
								array(
									// Inicio: SUPERVISOR DE PAGAMENTOS
									'nome_cargo'=> 'Supervisor de Pagamentos'
									// Termino: SUPERVISOR
								)
							)
						),
						// Inicio GERENTE DE COMPRAS
						// Termino GERENTE DE COMPRAS
						array(
							'nome_cargo'=> 'Gerente de Compras',
							'subordinados'=> array(
								// Inicio: SUPERVISOR DE SUPRIMENTOS
								array(
									'nome_cargo'=> 'Supervisor de Suprimentos'
								)
								// Termino: SUPERVISOR DE SUPRIMENTOS
							)
						)
						// Termino: GERENTE DE CONTAS A PAGAR
					)
				)
				//Termino: DIRETOR FINANCEIRO
			)
		)
	);

	function exibe($cargos)
	{
		$html = '<ul class="classe-teste">';

			foreach ($cargos as $cargo) {
				$html .= '<li>';
					$html .= $cargo['nome_cargo'];
					if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0)
					{
						$html .= exibe($cargo['subordinados']);
					}
				$html .= '</li>';
			}

		$html .= '</ul>';

		return $html;
	}

	echo exibe($hierarquia);

 ?>