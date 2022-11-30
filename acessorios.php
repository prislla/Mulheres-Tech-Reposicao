<?php
  require_once 'head.php';
  require_once 'menu.php';

?>  



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
               <h1>Acessórios Fitness</h1>
            </div>

        </div>
    </div>
    

    <div class="container-fluid imagens">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="img/garrafa.jpg" alt="Squeeze">
                     <div class="card-body">
                        <h3 class="card-text">Squeeze</h3>
                        <p class="card-text">R$ 30,00</p>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#squeeze">
                            Comprar
                          </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="img/combo.jpg" alt="Combo treino">
                     <div class="card-body">
                        <h3 class="card-text">Combo treino</h3>
                        <p class="card-text">R$ 40,00</p>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#comboTreino">
                            Comprar
                          </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="img/corda.jpg" alt="Corda elastica">
                     <div class="card-body">
                     <h3 class="card-text">Corda elástica</h3>
                        <p class="card-text">R$ 50,00</p>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#corda">
                            Comprar
                          </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="img/combo.jpg" alt="Combo trainer">
                     <div class="card-body">
                        <h3 class="card-text">Combo trainer</h3>
                        <p class="card-text">R$ 50,00</p>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#trainer">
                            Comprar
                          </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    



    <!-- Modal -->
<div class="modal fade" id="squeeze" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Squeeze</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="img/garrafa.jpg" alt="Squeeze">
      Garrafa Squeeze 700ml
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="combotreino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Combo Treino</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="img/combo.jpg" alt="Combo treino">
      Acompanha rolo de exercícios + Extensor elástico
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="corda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Corda Elástica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="img/corda.jpg" alt="Corda elastica">
      Corda Elástica com 2 metros
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="trainer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Combo Trainer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="img/combo.jpg" alt="Combo trainer">
      Acompanha rolo de exercícios + Extensor elástico
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>



    <?php
        require_once 'footer.php';

    ?>
 