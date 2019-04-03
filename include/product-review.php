<?php
$total = 0;
if(isset($_SESSION['carrinho'])){
	for($i = 0; $i < sizeof($_SESSION['carrinho']); $i++){
		$produto = $_SESSION['carrinho'][$i];
		for($j = 0; $j < sizeof($_SESSION['produtos']); $j++){
			if($produto[0] == $_SESSION['produtos'][$j]['id'] && $produto[1] == $_SESSION['produtos'][$j]['tipo']){
				$total += $_SESSION['produtos'][$j]['preco'];
				echo "
				<tbody>
				<tr>
				<td class='thumb'><img src='".$_SESSION['produtos'][$j]['imagem']."' alt=''></td>
				<td class='details'>
				<a href='#'>".$_SESSION['produtos'][$j]['nome']."</a>
				<ul>
				<li><span>Brand: ".$_SESSION['produtos'][$j]['marca']."</span></li>
				<li><span>Color: Camelot</span></li>
				</ul>
				</td>
				<td class='price text-center'><strong>R$".$_SESSION['produtos'][$j]['preco']."</strong><br></td>
				<td class='qty text-center'><input class='input' type='number' value='1'></td>
				<td class='total text-center'><strong class='primary-color'>".$_SESSION['produtos'][$j]['preco']."</strong></td>
				<td class='text-right'><button class='main-btn icon-btn'><i class='fa fa-close'></i></button></td>
				</tr>
				</tbody>";
				
			}
		}
	}
	echo "
	<tfoot>

	<tr>
	<th class='empty' colspan='3'></th>
	<th>SHIPING</th>
	<td colspan='2'>Free Shipping</td>
	</tr>
	<tr>
	<th class='empty' colspan='3'></th>
	<th>TOTAL</th>
	<th colspan='2' class='total'>R$".$total."</th>
	</tr>
	</tfoot>
	";
}

?>