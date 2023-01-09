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
                     <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/esportista-recomendando-beber-agua_1262-5826.jpg?w=1380&t=st=1673279148~exp=1673279748~hmac=d0bf55e457ddeb87776e75144be5015b0b159d192182b23ec54e6a45d8d1ee82" alt="Squeeze">
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
                     <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/natureza-morta-de-acessorios-de-fitness-e-ginasio-perfeitamente-ordenados_52683-100700.jpg?w=740&t=st=1673282355~exp=1673282955~hmac=f4d56b2bd56955fcaa2df1056abc68caad53013860ff5797145706690375ecfc" alt="Combo treino">
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
                     <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/composicao-de-ginasio-moderno-com-elementos-do-esporte_23-2147913638.jpg?w=740&t=st=1673282570~exp=1673283170~hmac=0db49abadeca2202ceb30738d48f4d0d6eb59bcbadf18f23a722699d6b873d09" alt="Corda elastica">
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
                     <img class="card-img-top" src="https://img.freepik.com/vetores-gratis/conjunto-de-cores-do-saco-de-ginastica-rosa-claro-e-escuro-com-diferentes-tamanhos-e-capacidades-ilustracao-vetorial_1284-75492.jpg?w=826&t=st=1673282398~exp=1673282998~hmac=afa475e5af322f49bc9ccaa8e9210aea9ded2a9a59667de8f42d1d875626f9b4" alt="Combo trainer">
                     <div class="card-body">
                        <h3 class="card-text">Bolsas de Treino</h3>
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
      <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/esportista-recomendando-beber-agua_1262-5826.jpg?w=1380&t=st=1673279148~exp=1673279748~hmac=d0bf55e457ddeb87776e75144be5015b0b159d192182b23ec54e6a45d8d1ee82" alt="Squeeze">
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
      <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/natureza-morta-de-acessorios-de-fitness-e-ginasio-perfeitamente-ordenados_52683-100700.jpg?w=740&t=st=1673282355~exp=1673282955~hmac=f4d56b2bd56955fcaa2df1056abc68caad53013860ff5797145706690375ecfc" alt="Combo treino">
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
      <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/composicao-de-ginasio-moderno-com-elementos-do-esporte_23-2147913638.jpg?w=740&t=st=1673282570~exp=1673283170~hmac=0db49abadeca2202ceb30738d48f4d0d6eb59bcbadf18f23a722699d6b873d09" alt="Corda elastica">
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
        <h5 class="modal-title" id="exampleModalLabel">Bolsas Treino</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="https://img.freepik.com/vetores-gratis/conjunto-de-cores-do-saco-de-ginastica-rosa-claro-e-escuro-com-diferentes-tamanhos-e-capacidades-ilustracao-vetorial_1284-75492.jpg?w=826&t=st=1673282398~exp=1673282998~hmac=afa475e5af322f49bc9ccaa8e9210aea9ded2a9a59667de8f42d1d875626f9b4" alt="Combo trainer">
      Bolsa 16 litros para treino 
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
 
