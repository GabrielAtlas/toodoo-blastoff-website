<?php
// Template name: Blastoff-Empresas
?>
<?php get_header(); ?>
<main>
  <section id="branding-section" class="branding position-relative py-5">
    <div class="container d-flex justify-content-between pt-5">
      <div class="brading-info">
        <h1>
          <?php echo the_field('branding_heading'); ?>
        </h1>
        <p>
          <?php echo the_field('branding_description') ?>
        </p>
        <a href="<?php echo the_field('branding_button'); ?>" class="toodoo-button ghost mb-5">SAIBA MAIS</a>
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
              <?php
                // Get the repeater field values
                $stepCards = get_field('step_cards');

                // Check if there are values
                if ($stepCards) {
                    foreach ($stepCards as $index => $card) {
                        $title = $card['step_card_title'];
                        $description = $card['step_card_description'];
                        $icon = $card['step_card_icon'];

                        // Determine if it's the first iteration
                        $class = ($index === 0) ? 'active' : '';

                        // Display the values
                        echo '<div id="step-' . $index .'" class="step-card '. $class .'">
                                <img src="' . get_stylesheet_directory_uri() . '/public/assets/icons/'. $icon .'" />
                                <div class="step-card-description">
                                  <h6>' . $title . '</h6>
                                  <p>
                                  ' . $description . '
                                  </p>
                                </div>
                              </div>';
                    }
                }
              ?>
            </div>
          </div>
          <div id="step-images" class="col-md-6 order-md-4 mb-4">
            <?php
                // Check if there are values
                if ($stepCards) {
                    foreach ($stepCards as $index => $card) {
                        $image = $card['step_card_image'];

                        // Determine if it's the first iteration
                        $visible = ($index === 0) ? '' : 'd-none';

                        // Display the values
                        echo '<img id="step-image-' . $index . '" class="img-fluid ' . $visible . '" src="'. $image . '" width="550" height="651" alt="Foto de pessoas felizes" />';
                    }
                }
              ?>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="rocket-section" class="bg-blue">
    <div class="rocket-section container p-5">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/assets/icons/rocket-icon.svg" class="my-4" alt="Rocket icon" />
      <p>
        <?php echo the_field('rocket_description'); ?>
      </p>
      <div class="my-4">
        <a href="<?php echo the_field('rocket_button_link'); ?>" class="toodoo-button">
        QUERO IMPULSIONAR MEU NEGÓCIO
      </a>
      </div>
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
        <?php echo do_shortcode('[slide-anything id="10"]'); ?>
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
<script src="<?php echo get_stylesheet_directory_uri(); ?>/public/js/empresas.js"></script>
<?php get_footer(); ?>