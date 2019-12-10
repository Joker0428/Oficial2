<?php include "View/header.php";?>
<link rel="stylesheet" href="../css/estilo.css">
<div>
<?php  echo $_SESSION['clientenome'];?>
    <!-- Button trigger modal -->
</div>
<div class="direita">
<button type="button" class="btn btn-warning" ><a href="<?php echo $url; ?>#">Meu Cadastro</a></button>
</div>
   <p></p>
    <a class="btn btn-primary" href="http://localhost/Oficial2/www/painel/logoff">Sair</a>


  


    


<?php include "View/footer.php";?>