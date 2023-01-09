<?php
  require_once 'head.php';
  require_once 'menu.php';

?>  



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
               <h1>Moda Fitness Body Movement</h1>
            </div>

        </div>
    </div>
    

    <div class="container-fluid imagens">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/garota-afro-americana-em-retrato-de-estudio-de-calcas-de-ioga-roxas_53876-102957.jpg?w=360&t=st=1673291474~exp=1673292074~hmac=4ec08ae3bfdb25f010393db6652c4f45640df53e195e0ec26458a356b7fe0bd8" alt="Conjunto impact">
                     <div class="card-body">
                        <h3 class="card-text">Conjunto Violet</h3>
                        <p class="card-text">R$ 270,00</p>
                        <!-- Botão para acionar modal -->
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#impact">
                            Comprar
                           </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/rapariga-loira-com-sutia-esportivo-cinza-para-sessao-de-fotos-de-roupas-esportivas_53876-102308.jpg?w=740&t=st=1673291479~exp=1673292079~hmac=d6be9278abddad313afb092c2e82419b3700a3895a9e4bd696902f5d5e5cbfa1" alt="Macacao scarlat">
                     <div class="card-body">
                        <h3 class="card-text">Top Nadador</h3>
                        <p class="card-text">R$ 30,00</p>
                        <!-- Botão para acionar modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#scarlat">
                             Comprar
                            </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/sem-rosto-visivel-jovem-atletica-fazendo-levantamento-pesado-usando-halteres-na-academia_549566-938.jpg?w=740&t=st=1673291516~exp=1673292116~hmac=43dc027dbf8e952b0dbeac714ffa47dc82c70e956817d6f92d51fb10069ab970" alt="Conjunto florence">
                     <div class="card-body">
                     <h3 class="card-text">Legging Florence</h3>
                        <p class="card-text">R$ 50,00</p>
                          <!-- Botão para acionar modal -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#florence">
                            Comprar
                          </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/closeup-de-atleta-feminina-correndo-na-esteira-em-uma-academia_637285-8584.jpg?w=740&t=st=1673291547~exp=1673292147~hmac=b4cb67815208bf1c79ab5817b5ee3dfbd8748a6dc4dc6e36f2ba9a824f0eaee8" alt="Conjunto april">
                     <div class="card-body">
                        <h3 class="card-text">Tênis corrida</h3>
                        <p class="card-text">R$ 250,00</p>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#april">
                            Comprar
                          </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    



<!-- Modal -->
<div class="modal fade" id="impact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto Violet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="https://img.freepik.com/fotos-gratis/garota-afro-americana-em-retrato-de-estudio-de-calcas-de-ioga-roxas_53876-102957.jpg?w=360&t=st=1673291474~exp=1673292074~hmac=4ec08ae3bfdb25f010393db6652c4f45640df53e195e0ec26458a356b7fe0bd8" alt="Conjunto Impact">
        <p>Conjunto acompanha tênis, camiseta longa e legging.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="scarlat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top Nadador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/rapariga-loira-com-sutia-esportivo-cinza-para-sessao-de-fotos-de-roupas-esportivas_53876-102308.jpg?w=740&t=st=1673291479~exp=1673292079~hmac=d6be9278abddad313afb092c2e82419b3700a3895a9e4bd696902f5d5e5cbfa1" alt="Macacao scarlat">
        Top Costas Nadador cor cinza.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="florence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Legging Florence</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/sem-rosto-visivel-jovem-atletica-fazendo-levantamento-pesado-usando-halteres-na-academia_549566-938.jpg?w=740&t=st=1673291516~exp=1673292116~hmac=43dc027dbf8e952b0dbeac714ffa47dc82c70e956817d6f92d51fb10069ab970" alt="Conjunto florence">
        Legging Florence rosa.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="april" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tênis corrida branco</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/closeup-de-atleta-feminina-correndo-na-esteira-em-uma-academia_637285-8584.jpg?w=740&t=st=1673291547~exp=1673292147~hmac=b4cb67815208bf1c79ab5817b5ee3dfbd8748a6dc4dc6e36f2ba9a824f0eaee8" alt="Conjunto april">
      Tênis de corrida cor branco.
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
 





   