<?php
require_once 'head.php';
?>

<div class="container-fluid texto">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Preencha todos os campos abaixo para cadastro de alunos da <strong>Body Movement</strong>.</h2>
      </div>
    </div>
  </div>



<form>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form=group">
                    <label for="inputName">Nome</label>
                    <input type="text" class="form-control" placeholder="Seu nome">
        </div>
     </div>

     <div class="col-md-6">
                <div class="form=group">
                    <label for="inputEmail">E-mail</label>
                    <input type="email" class="form-control" placeholder="Seu e-mail">
        </div>
     </div>
     

            <div class="col-md-12">
                 <label for="sexo">Sexo</label>
                 <div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
                 <label class="form-check-label" for="inlineRadio1">Feminino</label>
           </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
            <label class="form-check-label" for="inlineRadio2">Masculino</label>
           </div>
</div>
               
      </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-md-3">
            <div class="form-group">            
            <label for="cpf">Cpf</label>
            <input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');" placeholder="000.000.000-00">
    </div>
          </div>

             <div class="col-md-3">
                   <div class="form-group">
                   <label for="formGroupExampleInput2">RG</label>
                   <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="RG">
                  </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                    <label for="formGroupExampleInput2">Data de Nascimento</label>
                    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Data de Nascimento">
                 </div>
                 </div>

                 <div class="col-md-3">
                 <div class="form-group">
                 <label for="telefone">Telefone</label>
                 <input type="text" class="form-control" onkeypress="$(this).mask('(00)00000-0000')" placeholder="(00) 00000-0000">
                 </div>
                 </div>


                 <div class="container">
                <div class="row">
            <div class="col-md-4">
            <div class="form-group">            
            <label for="cpf">CEP</label>
            <input type="text" class="form-control" id="inputCEP" placeholder="00.000-000">
    </div>
          </div>

             <div class="col-md-4">
                   <div class="form-group">
                   <label for="inputAddress">Endereço</label>
                   <input type="text" class="form-control" id="inputAddress" placeholder="Rua/Estrada/Avenida, nº ">
                  </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                    <label for="inputAddress2">Complemento</label>
                 <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
                 </div>
                 </div>



                 <div class="container">
                <div class="row">
                <div class="col-md-6">
            <div class="form-group">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>...</option>
      </select>
    </div>
</div>
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Tudo certo!
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>



<hr>
<?php
      require_once 'footer.php';
    ?>