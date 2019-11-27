<?php include "view/header.php";?>
<form>
<div class="col-md-6">
<fieldset class="pf-dados">
<legend class="titlecadastro">Seus Dados</legend>
<div class="dadoscadastro">
<ul>
<li>
<label for="nome">Nome:</label>
<input class="form-control" id="nome" name="nome" placeholder="Ex: João da Silva" type="text" value="GABRIEL BELLO DA SILVA" required="">
</li>
<li>
<label for="data">Data de nascimento:</label>
<input class="form-control" id="data" name="f_datanascimento" placeholder="DD/MM/AAAA" type="text" value="14/08/2000" required="" maxlength="10" autocomplete="off">
</li>
<li>
<label for="cpf">CPF:</label>
<input id="cpf" class="form-control" placeholder="000.000.000-00" name="f_cpf" type="text" value="17856715707" required="" maxlength="14" autocomplete="off">
</li>
<li>
<label for="f_rg">RG:</label>
<input id="f_rg" class="form-control" placeholder="0.000.000-0" type="text" name="f_rg" value="314046152" required="">
</li>
<li>
<label for="emailpf">E-mail:</label>
<input id="emailpf" class="form-control" placeholder="exemplo@site.com" type="text" name="f_email" value="gabrielslolihhjj@gmail.com" required="">
</li>
</ul>
</div>
</fieldset>
</div>

</form>
<?php include "view/footer.php";?>