<?php 

	interface Funcionario
	{
		public function dadosFuncionario($depart, $cargo, $nome, $rg);
	}

	class ListaFuncionarios implements Funcionario
	{
		private $departamento;
		private $cargo;
		private $nome;
		private $rg;

	    public function getDepartamento()
	    {
	        return $this->departamento;
	    }

	    public function setDepartamento($departamento)
	    {
	        $this->departamento = $departamento;
	    }

	    public function getCargo()
	    {
	        return $this->cargo;
	    }

	    public function setCargo($cargo)
	    {
	        $this->cargo = $cargo;	        
	    }

	  
	    public function getNome()
	    {
	        return $this->nome;
	    }

	    public function setNome($nome)
	    {
	        $this->nome = $nome;
	    }

	    public function getRg()
	    {
	        return $this->rg;
	    }

	    public function setRg($rg)
	    {
	        $this->rg = $rg;
	    }

	    public function dadosFuncionario($departamento, $cargo, $nome, $rg)
	    {
	    	return array('Departamento: ' => $this->getDepartamento(),
	    					'Cargo: ' => $this->getCargo(),
	    					'Nome: ' => $this->getNome(),
	    					'RG: ' => $this->getRg());
	    }
	}

	$addFunc = new ListaFuncionarios();
	$dep = $addFunc->setDepartamento('T.I');
	$cargo = $addFunc->setCargo('Front End');
	$nome = $addFunc->setNome('Nicolas de Almeida Nascimento');
	$rg = $addFunc->setRg('22203992-1');
	$addFunc->dadosFuncionario($dep, $cargo, $nome, $rg);

	echo "<ul>";
	foreach ($addFunc->dadosFuncionario($dep, $cargo, $nome, $rg) as $key => $value) {
		echo "<li>". $key . $value ."</li>";
	}
	echo "</ul>";