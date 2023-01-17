<?php
  require_once '../includes/head.php';
  require_once '../includes/menu.php';

?> 

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../img/about.png" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../img/about.png" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../img/about.png" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h3>Sobre nós</h3>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime corrupti ratione architecto nobis, magnam in doloribus cupiditate, nesciunt obcaecati error odio repellendus necessitatibus ea deleniti. Facere, nisi unde. Amet, fugiat.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas impedit quo omnis distinctio repellendus nihil, nulla dolore quaerat atque blanditiis perferendis eaque adipisci, voluptatum labore id dolores ipsum. Facere, laboriosam?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde animi nesciunt quam ipsam, reiciendis sequi quis laborum assumenda libero fugiat ipsa a, error suscipit aliquid quaerat optio nemo quas dolores.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus molestias, harum eum suscipit tempora dicta beatae quis fugit sint, maxime velit labore totam architecto. Vero eaque aspernatur iste earum sit!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, error eos? Omnis similique repellat earum, quasi beatae quos quo eligendi quae autem natus optio quis expedita rem soluta. Similique, perspiciatis.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro optio quo nesciunt aliquid, velit vero quae tempora iure dolore incidunt sint recusandae aperiam placeat, deserunt hic blanditiis quam impedit? Harum.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h3>Nossos Professores</h3>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime corrupti ratione architecto nobis, magnam in doloribus cupiditate, nesciunt obcaecati error odio repellendus necessitatibus ea deleniti. Facere, nisi unde. Amet, fugiat.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas impedit quo omnis distinctio repellendus nihil, nulla dolore quaerat atque blanditiis perferendis eaque adipisci, voluptatum labore id dolores ipsum. Facere, laboriosam?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde animi nesciunt quam ipsam, reiciendis sequi quis laborum assumenda libero fugiat ipsa a, error suscipit aliquid quaerat optio nemo quas dolores.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus molestias, harum eum suscipit tempora dicta beatae quis fugit sint, maxime velit labore totam architecto. Vero eaque aspernatur iste earum sit!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, error eos? Omnis similique repellat earum, quasi beatae quos quo eligendi quae autem natus optio quis expedita rem soluta. Similique, perspiciatis.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro optio quo nesciunt aliquid, velit vero quae tempora iure dolore incidunt sint recusandae aperiam placeat, deserunt hic blanditiis quam impedit? Harum.      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h3>Nossos Alunos</h3>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime corrupti ratione architecto nobis, magnam in doloribus cupiditate, nesciunt obcaecati error odio repellendus necessitatibus ea deleniti. Facere, nisi unde. Amet, fugiat.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas impedit quo omnis distinctio repellendus nihil, nulla dolore quaerat atque blanditiis perferendis eaque adipisci, voluptatum labore id dolores ipsum. Facere, laboriosam?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde animi nesciunt quam ipsam, reiciendis sequi quis laborum assumenda libero fugiat ipsa a, error suscipit aliquid quaerat optio nemo quas dolores.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus molestias, harum eum suscipit tempora dicta beatae quis fugit sint, maxime velit labore totam architecto. Vero eaque aspernatur iste earum sit!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, error eos? Omnis similique repellat earum, quasi beatae quos quo eligendi quae autem natus optio quis expedita rem soluta. Similique, perspiciatis.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro optio quo nesciunt aliquid, velit vero quae tempora iure dolore incidunt sint recusandae aperiam placeat, deserunt hic blanditiis quam impedit? Harum.      </div>
    </div>
  </div>
</div>


<div class="aboutb">

<div class="alert alert-success" role="alert">
<h4>Saiba mais sobre nossas atividades.</h4> 

<div>
<a href="../index.php"><button type="submit" class="btn btn-outline-dark">Clique aqui</button><a>
</div>


</div>
</div>






























<?php
        require_once '../includes/footer.php';

    ?>