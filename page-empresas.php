<?php
// Template name: Blastoff-Empresas
?>
<?php get_header(); ?>
<main>
  <section id="branding-section" class="branding position-relative py-5">
    <div class="container d-flex justify-content-between pt-5">
      <div class="brading-info">
        <h1>
          lidere o mercado com os
          <strong class="color-magenta">melhores</strong> dev’s
        </h1>
        <p>
          Contratamos, treinamos e desenvolvemos profissionais que hoje,
          atuam como desenvolvedores em grandes clientes.
          <strong>Não fique de fora!</strong>
        </p>
        <button class="toodoo-button ghost mb-5">SAIBA MAIS</button>
        <div class="i-cant-hear-you"></div>
        <div class="people-gif"></div>
      </div>
      <div class="position-relative">
        <div class="sorry-go-ahead d-none d-md-block"></div>
        <img class="rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/public/assets/gifs/empresas-1.gif" style="mix-blend-mode: soft-light" width="579" height="326" />
      </div>
    </div>
  </section>

  <section id="our-job">
    <div class="container py-5">
      <div class="our-job-heading text-center mb-5">
        <h3 class="color-magenta">O que fazemos?</h3>
        <h1 class="color-blue">Veja quais são os passos que seguimos</h1>
      </div>
      <div class="our-job-content mt-4">
        <div class="row">
          <div class="col-md-6 order-1 order-md-2">
            <div class="d-flex flex-column">
              <div class="step-card active">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/assets/icons/light-icon.svg" />
                <div class="step-card-description">
                  <h6>Desafios</h6>
                  <p>
                    O Blastoff aborda todos os desafios de treinamento e
                    desenvolvimento de maneira personalizada e escalável.
                  </p>
                </div>
              </div>
              <div class="step-card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/assets/icons/hood-icon.svg" />
                <div class="step-card-description">
                  <h6>Ensino</h6>
                  <p>
                    O programa é projetado para preencher o gap que existe
                    entre o ensino tradicional e o mercado de trabalho.
                  </p>
                </div>
              </div>
              <div class="step-card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/assets/icons/star-icon.svg" />
                <div class="step-card-description">
                  <h6>Habilidades</h6>
                  <p>
                    Nós Desenvolvemos as competências e habilidades dos
                    colaboradores criando um ambiente saudável, produtivo,
                    motivado e competitivo.
                  </p>
                </div>
              </div>
              <div class="step-card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/assets/icons/target-icon.svg" />
                <div class="step-card-description">
                  <h6>Objetivos</h6>
                  <p>
                    Colaboramos para encontrar e reter talentos para atingir
                    os objetivos estratégicos da organização.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-4 mb-4">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/public/assets/images/desafios-grid-2x.png" width="550" height="651" alt="Foto de pessoas felizes" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="rocket-section" class="bg-blue">
    <div class="rocket-section container p-5">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/assets/icons/rocket-icon.svg" class="my-4" alt="Rocket icon" />
      <p>
        Em um cenário de alta demanda por profissionais com
        <strong>habilidades técnicas</strong> em desenvolvimento de software
        e escassez de talentos, impulsionamos organizações de diferentes
        tamanhos com profissionais qualificados para desenvolvimento de
        <strong>front end e back end</strong> para atuarem no mercado e
        vencerem desafios.
      </p>
      <button class="toodoo-button my-4">
        QUERO IMPULSIONAR MEU NEGÓCIO
      </button>
    </div>
  </section>

  <section id="methodology-section">
    <div class="container py-5">
      <div class="methodology-heading d-flex flex-column align-items-center justify-content-center text-center mb-5">
        <h3 class="color-magenta">Metodologia</h3>
        <h1 class="color-blue">Como esse profissional se desenvolverá?</h1>
        <p>
          Os profissionais terão uma base sólida de lógica de programação,
          metodologias ágeis e se desenvolverão numa linguagem e/ou
          framework específico.
        </p>
        <div class="d-flex flex-nowrap overflow-auto text-nowrap mw-100 gap-3 mt-5" id="methodology-buttons"></div>
      </div>
      <div class="methodology-content mt-5">
        <div class="row">
          <div class="col-md-6">
            <div class="d-flex align-items-start gap-3">
              <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/public/assets/images/toodoo-default-logo.svg" alt="Toodoo Logo" />
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br />
                <br />
                Duis aute irure dolor in reprehenderit in voluptate velit
                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                occaecat.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <img class="rounded img-fluid" width="568" height="368" src="<?php echo get_stylesheet_directory_uri(); ?>/public/assets/images/methodology-1.png" alt="Imagem ilustrativa" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="feedback-section">
    <div class="container py-5">
      <div class="feedback-heading d-flex flex-column align-items-center justify-content-center text-center mb-5">
        <h3 class="color-magenta">Depoimentos</h3>
        <h1 class="color-blue">
          Saiba o que os nossos alunos acharam sobre o programa!
        </h1>
      </div>
      <div class="feedback-content mt-4">
        <?php echo do_shortcode('[slide-anything id="34"]'); ?>
      </div>
    </div>
  </section>

  <section id="form-section">
    <div class="form-section-container container py-5">
      <div class="row py-5">
        <div class="form-section-texts col-md-6 mb-5">
          <h1>
            E aí, bora formar novos profissionais <strong>juntos?</strong>
          </h1>
          <p>Inscreva-se no formulário.</p>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center">
          <div class="toodoo-form">
            <?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="solution-section">
    <div class="solution-section-container container pt-5">
      <div class="row pt-5">
        <div class="solution-section-texts col-md-6 mb-5">
          <h1>
            estamos prontos para criar uma <strong>solução</strong> para o
            seu problema
          </h1>
          <button class="toodoo-button mt-3 mb-5">VAMOS CONVERSAR?</button>
        </div>
        <div class="col-md-6 text-end d-none d-md-block">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/assets/images/toodoo-avatar.png" alt="Mascote Toodoo" />
        </div>
      </div>
    </div>
  </section>
</main>
<script defer src="./js/empresas.js"></script>
<!--
  <script>
      var cards = document.getElementsByClassName("step-card");

      for (var i = 0; i < cards.length; i++) {
        cards[i].addEventListener("click", function () {
          for (var j = 0; j < cards.length; j++) {
            if (cards[j] == this) {
              cards[j].classList.add("active");
            } else {
              cards[j].classList.remove("active");
            }
          }
        });
      }
    </script>
-->
<?php get_footer(); ?>