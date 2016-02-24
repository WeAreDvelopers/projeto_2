<?php 
function caminho(){
	$folder = 'paginas/';
	$scanDir = array_diff(scandir($folder), array('..', '.'));

	$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	$patch = explode("/", $rota['path']);
	
    $X = array_filter($patch); 
	$file = end($X);	
	if(!is_file($folder.$file)){
		$order = $file;
		$file = array_pop($X);
		$file = end($X);
	}
	if(is_dir('../'.$file.'/') == true){
			$file = 'home';	
	};
	if(in_array($file.'.php',$scanDir)){
		return  'paginas/'.$file.'.php';
	}else{
		
		return  'paginas/'.'404.php';
	}
};
/* FUNÇÃO PARA ORDENAR LISTA*/
function ordenaArray($arrayClientes){
	$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	$patch = explode("/", $rota['path']);
	//PEGO O ULTIMO ELEMENTO VALIDO DO ARRAY E VERIFICO SE ELE NÃO É UMA PASTA
    $X = array_filter ($patch);  
	$order = end($X);

	if($order == 'a-z'){
		ksort($arrayClientes);
	}
	if($order == 'z-a'){
		krsort($arrayClientes);
	}
	return $arrayClientes;
}

 ?>