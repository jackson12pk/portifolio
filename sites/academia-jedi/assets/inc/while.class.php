<?php
include "toolbox/config/conexaoRaiz.php";

class loop{

	public $table;
	public $where;
	public $order;
	public $limit;
	public $sql;
	public $fetch;
	public $return;


	function __construct($table, $where = "", $order = "", $limit = ""){
		$this->table = $table;
		$this->where = $where;
		$this->order = $order;
		$this->limit = $limit;

		$this->sql();

	}

	function sql(){
		$this->sql = "SELECT * FROM ".$this->table;

		if($this->where != ''){
			$this->sql .= ' WHERE '.$this->where;
		}

		if($this->order != ''){
			$this->sql .= ' ORDER BY '.$this->order;
		}

		if($this->limit != ''){
			$this->sql .= ' LIMIT '.$this->limit;
		}

		GLOBAL $query;
		$query = mysql_query($this->sql);
	}

	function attr($val){
		foreach ($val as $indice => $valor) {
			GLOBAL ${$indice};

			${$indice} = utf8_encode($valor);
		}
	}
}

//------------------------CLASS FETCH-----------------------------------

class fetch extends loop{

	function __construct($table, $where){
		$this->table = $table;
		$this->where = $where;

		$this->fetch();
	}

	function fetch(){
		$this->content = mysql_fetch_array(mysql_query("SELECT * FROM ".$this->table." WHERE ".$this->where." LIMIT 1"));
		$this->attr($this->content);
	}
	
}

class extra{
	public $sql;

	function slash($val){
		foreach ($val as $indice => $valor) {
			GLOBAL ${$indice};

			${$indice} = addslashes(utf8_decode($valor));
		}
	}

	function callback($sql){
		$this->sql = $sql;
		if(mysql_query($this->sql)){
			print 'true';
		}else{
			print mysql_error();
			print 'false';
		}
	}
}

class texto{
	public $texto;

	function __construct($text, $qtd){

		$texto = substr(utf8_encode(strip_tags($text)),0,$qtd);

		print $texto;
	}
}

class contato{
	public $page;

	function __construct($page){
		?>
		$('.submit').click(function(){
	    $('#form').submit(function(){ return false;});

	    var page = <?=$page?>;
	    var dados = $('#form').serialize();

	      $.ajax({
	            url: page,
	            type: 'post',
	            data: dados,
	            success:function(xhr){
	                if(xhr == 'true'){
	                  alert('Sua mensagem foi enviada com sucesso.');
	                  $('#form')[0].reset();
	                 
	                }else{
	                  alert('Erro ao enviar sua mensagem, por favor, tente novamente.');
	                }
	            }
	      });
	  });

		<?

	}
}

class texto_completo{

	function __construct($id){
		$tex = mysql_fetch_assoc(mysql_query("SELECT * FROM texto where tex_id = ".$id));
		print utf8_encode($tex['tex_texto']);
	}
}
