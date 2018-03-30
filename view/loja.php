<?php
  // Importando o cabeçalho
  require_once("component/header.php");
?>
  <!--
  @autor Henrique Otremba
  @data 28/03/2018
  @descricao Página da loja onde contem os produtos e serviços
  -->
      <div class="foto_pesquisa sem_margem centro_lr">
        <div class="fundo_opaco_loj preenche_t_250">
          <form action="index.html" method="post">
            <div class="container_campo_pesquisa_loj centro_lr">
              <input required class="input fs_60 float_left" type="text" name="txt_pesquisa" value="" placeholder="Digite o que você procura">

              <label for="btn_pesquisar">
                <i class="material-icons fs_50 txt_branco txt_sombra_1x1x1_preto outline_none display_block float_left sem_borda transparente preenche_t_10">
                  search
                </i>
              </label>
              <input class="display_none" id="btn_pesquisar" type="submit" name="btn_pesquisar" value="">
            </div>
          </form>
        </div>
      </div>
      <div class="container_menu_pesquisa">
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/lavagem.svg" class="centralizado txt_branco " title="Lavagem de Carro"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/troca_oleo.svg" class="  centralizado txt_branco " title="Troca de óleo"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/pintura_funilaria.svg" class="  centralizado txt_branco " title="Pintura e Funilaria"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/troca_pneu.svg" class="  centralizado txt_branco " title="Troca de Pneu"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/balancing.svg" class="  centralizado txt_branco " title="Balanceamento"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/alarme.svg" class=" centralizado txt_branco " title="Alarmes"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/auto_eletrica.svg" class="  centralizado txt_branco " title="Auto Elétrica"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/ferramentas_eletrica.svg" class="  centralizado txt_branco " title="Ferramentas Elétricas"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/ferramentas_manuais.svg" class="  centralizado txt_branco " title="Ferramentas Manuais"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/revisao.svg" class="  centralizado txt_branco " title="Revisão do Carro"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/socorro_ja.svg" class="  centralizado txt_branco " title="Socorro Já"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/troca_reparo.svg" class="  centralizado txt_branco " title="Troca e Reparo de Vidros"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/chaveiro.svg" class="  centralizado txt_branco " title="Chaveiro"  alt="Pintura de Carros">
        </div>
      </div>
      <div class="container_parceiro_premium">
        <div class="anuncio_parceiro_premium float_left ">
          <img src="pictures/cliente_parceiro/parceiro1png.png" alt="">
        </div>
        <div class="anuncio_parceiro_premium float_right ">
          <img src="pictures/cliente_parceiro/parceiro1png.png" alt="">
        </div>
      </div>
      <div class="container_slider_produtos">
        <div id="content">
            <div id="carrossel">
                <ul>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                </ul>
            </div>
            <nav id="menu-carrossel">
                <a href="#" class="prev" title="Anterior">Anterior</a>
                <a href="#" class="next" title="Próximo">Próximo</a>
            </nav>
        </div>

        <script type="text/javascript" src="js/carrosel/carrosel.js"></script>
        <script type="text/javascript" src="js/carrosel/jcarousellite.js"></script>
        <script type="text/javascript" src="js/carrosel/carrossel.js"></script>
      </div>

      <div class="container_slider_produtos">
        <div id="content">
            <div id="carrossel">
                <ul>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                    <li>
                        <img src="http://www.placehold.it/200x150" alt="Nome da Imagem" title="Nome da Imagem"/>
                    </li>
                </ul>
            </div>
            <nav id="menu-carrossel">
                <a href="#" class="prev" title="Anterior">Anterior</a>
                <a href="#" class="next" title="Próximo">Próximo</a>
            </nav>
        </div>
      </div>
      <div class="container_parceiro_premium">
        <div class="anuncio_parceiro_premium float_left ">
          <img src="pictures/cliente_parceiro/parceiro1png.png" alt="">
        </div>
        <div class="anuncio_parceiro_premium float_right">
          <img src="pictures/cliente_parceiro/parceiro1png.png" alt="">
        </div>
      </div>
      <div class="container_produto_fixo">
        <div class="produto_fixo">

        </div>
        <div class="produto_fixo">

        </div>
        <div class="produto_fixo">

        </div>
        <div class="produto_fixo">

        </div>
      </div>

      <!-- Rodape -->
      <?php
        require_once('component/footer.php');
      ?>
