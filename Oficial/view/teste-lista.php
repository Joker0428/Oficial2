
<?php include "view/header.php";?>

  


 <?php foreach($lista as $produto) { ?>

    <div class="card-group linha">
    

    <div class="col-sm-4 direita">
<hr>
	<div class="product-image-wrapper">
	<div class="single-products">
	<div class="productinfo text-center">
		<img width="150" src="../View/img/produtos/<?php echo $produto['imagem'] ?>" />
            <h2><?php echo number_format($produto['preco'],2,",",".");?></h2>
            <h5><?php echo $produto['nome']?></h5>
 </hr>
				<h6 class="btn-outline-light"><?php  echo $produto['servico']?><h6>
                    <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
                    <hr>
	
	
	</div>
	</div>
	</div>
 </div>
 </div>

    <?php } ?>
   
    <div class="esquerda group-vertical">
     <ul>
         <hr>
         <li>Carros</li>
         <li>Carros</li>
         <li>Carros</li>
         <li>Carros</li>
         <li>Carros</li>
         <li>Carros</li>
         <li>Carros</li>
         <li>Carros</li>

 </ul>
 </div>
 
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
  
<?php include "view/footer.php";?>
