
<?php include "view/header.php";?>

  


<div class="card-deck">

<?php foreach($lista as $produto) { ?>
   

  
  <div class="card">
  
    <img width="150" src="../View/img/produtos/<?php echo $produto['imagem'] ?>" class="" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $produto['nome']?></h5>
      <p class="card-text"><?php  echo $produto['servico']?></p>
      <p class="card-text"><small class="text-muted"><?php echo number_format($produto['preco'],2,",",".");?></small></p>
      
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
