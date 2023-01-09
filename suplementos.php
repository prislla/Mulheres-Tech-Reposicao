<?php
  require_once 'head.php';
  require_once 'menu.php';

?>  



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
               <h1>Suplementos Body Movement</h1>
            </div>

        </div>
    </div>
    

    <div class="container-fluid imagens">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="https://img.freepik.com/psd-gratuitas/maquete-do-recipiente-de-proteina-em-po_47987-2904.jpg?w=740&t=st=1673290818~exp=1673291418~hmac=e1647192b890e9db2c42c9c9f7a3cd9f7675d0c6a1241ccb90289b838ba25dd4" alt="Calcio">
                     <div class="card-body">
                        <h3 class="card-text">Cálcio</h3>
                        <p class="card-text">R$ 25,00</p>
                        <!-- Botão para acionar modal -->
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#calcio">
                            Comprar
                           </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/comprimidos-sobre-branco_144627-15771.jpg?w=740&t=st=1673290873~exp=1673291473~hmac=dff13b6f2722fdd75c5497f531d5a5020c5244d60efe7515737ccc365b46f276" alt="Colageno">
                     <div class="card-body">
                        <h3 class="card-text">Colágeno</h3>
                        <p class="card-text">R$ 80,00</p>
                        <!-- Botão para acionar modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#colageno">
                             Comprar
                            </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="https://img.freepik.com/vetores-gratis/composicao-de-garrafas-de-suplementos-de-fitness_1284-23337.jpg?w=740&t=st=1673290821~exp=1673291421~hmac=878e1bd7ab21fc2804ce867d585742f5fecf47270f69ca1342eae962bf5066a0" alt="Whey protein">
                     <div class="card-body">
                     <h3 class="card-text">Whey Protein</h3>
                        <p class="card-text">R$ 250,00</p>
                          <!-- Botão para acionar modal -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#wheyProtein">
                            Comprar
                          </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="https://img.freepik.com/vetores-gratis/pacote-complexo-vitaminico-realista_23-2148489863.jpg?w=740&t=st=1673291276~exp=1673291876~hmac=fa536de2f34d65824a1f07af8ca909d01e92d21e6679e4187078a091cabc5116" alt="Colageno pro">
                     <div class="card-body">
                        <h3 class="card-text">Multivitamínico</h3>
                        <p class="card-text">R$ 150,00</p>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#colagenoPro">
                            Comprar
                          </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    



<!-- Modal -->
<div class="modal fade" id="calcio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cálcio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="https://img.freepik.com/psd-gratuitas/maquete-do-recipiente-de-proteina-em-po_47987-2904.jpg?w=740&t=st=1673290818~exp=1673291418~hmac=e1647192b890e9db2c42c9c9f7a3cd9f7675d0c6a1241ccb90289b838ba25dd4" alt="Calcio">
        Suplemento de Cálcio e Vitamina D em cápsulas
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="colageno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Colágeno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="https://img.freepik.com/fotos-gratis/comprimidos-sobre-branco_144627-15771.jpg?w=740&t=st=1673290873~exp=1673291473~hmac=dff13b6f2722fdd75c5497f531d5a5020c5244d60efe7515737ccc365b46f276" alt="Colageno">
        Colágeno + Ácido Hialurônico
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="wheyProtein" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Whey Protein</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="https://img.freepik.com/vetores-gratis/composicao-de-garrafas-de-suplementos-de-fitness_1284-23337.jpg?w=740&t=st=1673290821~exp=1673291421~hmac=878e1bd7ab21fc2804ce867d585742f5fecf47270f69ca1342eae962bf5066a0" alt="Whey protein">
        Whey Protein
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="colagenoPro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Multivitamínico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="https://img.freepik.com/vetores-gratis/pacote-complexo-vitaminico-realista_23-2148489863.jpg?w=740&t=st=1673291276~exp=1673291876~hmac=fa536de2f34d65824a1f07af8ca909d01e92d21e6679e4187078a091cabc5116" alt="Colageno pro">
        Multivitamínico
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
 