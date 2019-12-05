
<?php include "view/header.php";?>

  


<!--<div class="card-deck">

<?php //foreach($lista as $produto) { ?>
 
   

  
  <div class="card">
  
    <img width="150" src="../View/img/produtos/<?php// echo $produto['imagem'] ?>" class="" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php //echo $produto['nome']?></h5>
      <p class="card-text"><?php  //echo $produto['servico']?></p>
      <p class="card-text"><small class="text-muted"><?php// echo number_format($produto['preco'],2,",",".");?></small></p>
      
    </div>
    <?php//} ?>
  </div>
  <div class="card-deck">
<?php// foreach($lista as $produto) { ?>

<div class="card-group linha tres saitop">


<div class="col-sm-4 center">


<div class="single-products ">
<div class="productinfo text-center  ">
<img width="150" src="<?php echo $url ; ?>../View/img/produtos/<?php echo $produto['imagem'] ?>" />
</div>
</div>
</div>
<div class="card-body">
        <h4 class="text-center"><?php echo $produto['nome']?></h4>
        <h5 class="text-center">R$<?php echo number_format($produto['preco'],2,",",".");?></h5>

  <h6 class="no-centro"><?php // echo $produto['servico']?><h6>
     
                <a href="#" class=" btn btn-primary   add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao Carrinho</a>
                


</div>

</div>




<?php //} ?>

</div>-->
  
 
    <div class="row" id="ads">
    <?php foreach($lista as $produto) { ?>
    
    <!-- Category Card -->
    <div class="col-md-4 ">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">Ótimo Rendimento</span>
                <span class="card-notify-year">2019</span>
                <img class="img-fluid" src="../View/img/produtos/<?php echo $produto['imagem'] ?>" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Gratis:<?php  echo $produto['servico']?></span>
                <span class="card-detail-badge">R$:<?php echo number_format($produto['preco'],2,",",".");?></span>
                <span class="card-detail-badge">13000 Kms</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5><?php echo $produto['nome']?></h5>
                </div>
                <a class="ad-btn" href="#">Comprar</a>
            </div>
        </div>
    </div>
 
    <?php } ?>
    </div>
 
   
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
 
  
<?php include "view/footer.php";?>
