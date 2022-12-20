<?php
require_once 'head.php';
?>


<div class="container-fluid texto">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Preencha todos os campos abaixo para cadastro de funcionários da <strong>Body Movement</strong>.</h2>
        </div>
    </div>
</div>



<form>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="form=group">
                    <label for="Name">Nome</label>
                    <input type="text" class="form-control" placeholder="Seu nome">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form=group">
                    <label for="Email">E-mail</label>
                    <input type="email" class="form-control" placeholder="Seu e-mail">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form=group">
                    <label for="Cargo">Cargo</label>
                    <select class="custom-select">
                        <option selected>Escolha o Cargo</option>
                        <option value="1">Professor</option>
                        <option value="2">Recepcionista</option>
                    </select>
                </div>
           </div>


                <div class="col-md-12">
                    <label for="sexo">Sexo</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="opcao1">
                        <label class="form-check-label" for="inlineRadio1">Feminino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="opcao2">
                        <label class="form-check-label" for="inlineRadio2">Masculino</label>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');"
                            placeholder="000.000.000-00">
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
                        <input type="date" class="form-control" id="formGroupExampleInput2"
                            placeholder="Data de Nascimento">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" onkeypress="$(this).mask('(00)00000-0000')"
                            placeholder="(00) 00000-0000">
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="cpf">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep"
                                        onblur="pesquisacep(this.value);">                            
                                    </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputAddress">Endereço</label>
                                <input type="text" class="form-control" id="rua" name="rua"
                                    placeholder="Rua/Estrada/Avenida, nº ">
                            </div>
                        </div>

                        <div class="col-md-2">
                                <div class="form-group">
                                    <label for="numero">Número</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="inputAddress2">Complemento</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Apartamento, hotel, casa, etc.">
                            </div>
                        </div>



                        <div class="container">
                            <div class="row">

                            <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputCity">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro">
                                        </div>
                                    </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputCity">Cidade</label>
                                        <input type="text" class="form-control" id="cidade" name="cidade">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="uf">Estado</label>
                                            <p>
                                                <input type="text" class="form-control" id="uf" name="uf">
                                        </div>
                                    </div>
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