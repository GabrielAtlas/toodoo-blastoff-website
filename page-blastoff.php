<?php
// Template name: BlastoffAlunos
?>
<?php get_header('blastoff'); ?>
<section class="bg-blue overflow-x-hidden page-blastoff">
  <main class="main overflow-hidden">
    <section class="section-project light-orbs">
      <div class="container">
        <div class="text-center">
          <p class="fs-headline-lg color-magenta fw-bold mb-1 mb-md-3">
            <?php the_field('section_title_1nth') ?>
          </p>
          <h2 class="fs-display-md text-white text-uppercase fw-medium m-0">
            <?php the_field('section_subtitle_1nth') ?>
          </h2>
        </div>
        <figure class="rocket-animation d-flex align-items-center justify-content-center text-center w-100">
          <img class="w-100 object-fit-contain" src="<?php echo esc_html(get_field('lottiefile')['url']) ?>" alt="<?php echo esc_html(get_field('lottiefile')['alt']) ?>">
        </figure>
        <div>
          <p class="scroll-down-text text-center text-white text-uppercase mb-4">
            Scroll down
          </p>
          <figure class="scroll-down-button">
            <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/arrow-bottom-scrolldown.svg" alt="down">
          </figure>
        </div>
      </div>
    </section>
    <section class="section-information">
      <div class="container d-flex align-items-end align-items-md-center justify-content-between gap-4">
        <div class="text-white w-50">
          <h2 class="text-container fs-display-lg mb-3">
            <?php the_field('titulo_do_programa'); ?>
          </h2>
          <p class="text-container fs-title-lg fw-bold">
            <?php the_field('texto_do_programa'); ?>
          </p>
        </div>
        <figure class="information-rocket m-0">
          <img class="w-100" src="<?php echo esc_html(get_field('imagem_do_programa')['url']) ?>" alt="<?php echo esc_html(get_field('imagem_do_programa')['alt']) ?>">
        </figure>
      </div>
    </section>
    <section class="section-about light-orbs">
      <div class="container">
        <div class="text-center">
          <p class="fs-headline-lg color-magenta fw-bold mb-1 mb-md-3"><?php the_field('section_title_2nth') ?></p>
          <h2 class="fs-display-md text-white fw-medium m-0"><?php the_field('section_subtitle_2nth') ?></h2>
        </div>
        <div>
          <ul class="about-list text-white list-unstyled">
            <?php if (have_rows('about-list')) : while (have_rows('about-list')) : the_row(); ?>
                <li class="about-list-item bg-blur">
                  <p class="fs-title-lg fw-bold mb-2">
                    <?php the_sub_field('about-item-title'); ?>
                  </p>
                  <p class="about-item-text">
                    <?php the_sub_field('about-item-text'); ?>
                  </p>
                </li>
            <?php endwhile;
            else : endif; ?>
          </ul>
        </div>
        <div class="text-center text-white">
          <figure class="m-0">
            <img src="<?php echo esc_html(get_field('icone_sobre')['url']) ?>" alt="<?php echo esc_html(get_field('icone_sobre')['alt']) ?>">
          </figure>
          <p class="text-box">
            <?php the_field('texto_sobre'); ?>
          </p>
        </div>
      </div>
    </section>
    <section class="section-professionals-title">
      <div class="container">
        <div class="text-center">
          <p class="fs-headline-lg color-magenta fw-bold mb-1 mb-md-3"><?php the_field('section_title_3nth') ?></p>
          <h2 class="fs-display-md text-white fw-medium m-0"><?php the_field('section_subtitle_3nth') ?></h2>
        </div>
      </div>
    </section>
    <section class="section-professionals">
      <div class="container">
        <div>
          <ul class="professional-list list-unstyled text-white text-center">
            <?php if (have_rows('professional-list')) : while (have_rows('professional-list')) : the_row(); ?>
                <li class="professional-list-item bg-blur">
                  <figure class="profile-image">
                    <img class="w-100" src="<?php the_sub_field('foto_do_perfil') ?>" alt="<?php the_sub_field('nome_do_profissional') ?>">
                  </figure>
                  <div class="d-flex flex-column h-100">
                    <h3 class="fs-title-lg mt-4 mb-3">
                      <?php the_sub_field('nome_do_profissional'); ?>
                    </h3>
                    <p>
                      <?php the_sub_field('descricao_do_profissional'); ?>
                    </p>
                  </div>

                </li>
            <?php endwhile;
            else : endif; ?>
          </ul>
        </div>
      </div>
    </section>
    <section class="section-apprenticeship light-orbs">
      <div class="container light-orbs">
        <div class="text-white d-flex flex-sm-row justify-content-between align-items-sm-end mb-sm-5 flex-column align-items-center text-center text-sm-start">
          <div class="">
            <p class="fs-headline-lg color-magenta fw-bold mb-1 mb-md-3">
              <?php the_field('section_title_4nth'); ?>
            </p>
            <h2 class="fs-display-md text-white fw-medium m-0">
              <?php the_field('section_subtitle_4nth'); ?>
            </h2>
          </div>
          <div class="fs-title-lg">
            <p class="apprenticeship-info text-sm-end mb-4 mt-2 m-sm-0">
              <?php the_field('texto_fundamentos'); ?>
            </p>
          </div>
        </div>
        <div>
          <?php if (have_rows('about-list')) : while (have_rows('about-list')) : the_row(); ?>
          <?php endwhile;
          else : endif; ?>
          <ul class="apprenticeship-list list-unstyled">
            <li class="apprenticeship-button previous bg-magenta cursor-pointer">
            </li>
            <li class="apprenticeship-button next bg-magenta cursor-pointer">
            </li>
            <?php if (have_rows('apprenticeship-list')) : while (have_rows('apprenticeship-list')) : the_row(); ?>
                <li class="apprenticeship-list-item bg-blur text-white <?php if (get_row_index() == 1) : ?>active<?php endif; ?>" data-list-item="<?php echo (get_row_index() - 1); ?>">
                  <h2 class="apprenticeship-item-title">
                    0<?php echo get_row_index(); ?>
                  </h2>
                  <h3 class="apprenticeship-item-subtitle">
                    <?php the_sub_field('titulo') ?>
                  </h3>
                  <div class="apprenticeship-elements-hidden">
                    <p class="apprenticeship-item-info fs-title-lg">
                      <?php the_sub_field('conteudo') ?>
                    </p>
                    <a class="toodoo-button text-decoration-none fw-bold" href="<?php the_sub_field('link'); ?>">Saiba mais</a>
                  </div>
                </li>
            <?php endwhile;
            else : endif; ?>
          </ul>
          <ul class="apprenticeship-tip-list list-unstyled">
            <?php if (have_rows('apprenticeship-list')) : while (have_rows('apprenticeship-list')) : the_row(); ?>
                <li class="apprenticeship-tip-item <?php if (get_row_index() == 1) : ?> active <?php endif; ?>" data-list-item="<?php echo (get_row_index() - 1) ?>"></li>
            <?php endwhile;
            else : endif; ?>

          </ul>
        </div>
      </div>
    </section>
    <section class="section-process">
      <div class="container">
        <div class="text-center">
          <p class="fs-headline-lg color-magenta fw-bold mb-1 mb-md-3">
            <?php the_field('section_title_5nth') ?>
          </p>
          <p class="fs-title-lg text-white">
            <?php the_field('section_subtitle_5nth') ?>
          </p>
        </div>
        <div>
          <ul class="process-primary-list list-unstyled text-white">
            <li class="process-primary-item">
              <ul class="process-secondary-list list-unstyled">
                <?php if (have_rows('process-list')) : while (have_rows('process-list')) : the_row(); ?>
                    <li class="process-secondary-item">
                      <figure class="process-secondary-image">
                        <img class="w-100" src="<?php the_sub_field('imagem') ?>" alt="">
                      </figure>
                      <h3 class="process-secondary-title">
                        <?php the_sub_field('titulo'); ?>
                      </h3>
                      <p class="process-secondary-text">
                        <?php the_sub_field('texto'); ?>
                      </p>
                    </li>
                    <?php if (get_row_index() % 3  == 0 && get_row_index() != count(get_field('process-list'))) : ?>
              </ul>
            </li>
            <li class="process-primary-item">
              <ul class="process-secondary-list list-unstyled">
              <?php endif; ?>
          <?php endwhile;
                else : endif; ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="section-depositions light-orbs">
      <div class="container">
        <div class="text-white content-container">
          <div class="depositions-info">
            <h3 class="depositions-title">
              <?php the_field('section_title_6nth') ?>
            </h3>
            <p class="depositions-text fs-title-lg">
              <?php the_field('section_subtitle_6nth') ?>
            </p>
            <a class="toodoo-button ghost fs-title-lg text-white text-decoration-none text-uppercase" href="<?php the_field('link_do_botao_depoimentos'); ?>">
              Clique e interaja
            </a>
          </div>
          <div class="students-depositions">
            <div class="student-info">
              <div class="student-balloon">
                <div class="student-information-container">
                  <h3 class="fs-title-lg fw-bold">Emanuel (Swift – IOS / Mobile)</h3>
                  <p class="student-text mb-1">
                    Olá, sou o Emanuel Motta, da stack de SWIFT iOS e vim aqui falar um pouco de como está sendo a minha experiência no programa BlastOff, que é um oferecimento TooDoo.
                    O programa tem sido muito legal, em todos os quesitos, gosto bastante dos métodos que são utilizados para nos
                    Olá, sou o Emanuel Motta, da stack de SWIFT iOS e vim aqui falar um pouco de como está sendo a minha experiência no programa BlastOff, que é um oferecimento TooDoo.
                    O programa tem sido muito legal, em todos os quesitos, gosto bastante dos métodos que são utilizados para nos
                  </p>
                </div>
              </div>
              <div class="student-balloon-detail"></div>
            </div>
            <figure class="student-image">
              <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/images/stundent-example.png" alt="">
            </figure>
          </div>
        </div>
      </div>
      <div class="list-container">

        <ul class="students-list list-unstyled">
          <?php if (have_rows('depoimentos_de_alunos')) :
            while (have_rows('depoimentos_de_alunos')) : the_row(); ?>

              <li class="students-list-item" data-list-item="<?php echo (get_row_index() - 1); ?>">
                <figure>
                  <img class="w-100" src="<?php the_sub_field('imagem') ?>" alt="<?php the_sub_field('nome') ?>">
                </figure>

                <div class="depositions-container d-none">
                  <p class="the-image"><?php echo the_sub_field('imagem'); ?></p>
                  <p class="the-name"><?php echo the_sub_field('nome') ?></p>
                  <p class="the-depositions"><?php echo the_sub_field('depoimento') ?></p>
                </div>
              </li>

          <?php endwhile;
          else : endif; ?>
        </ul>

        <ul class="students-tip-list list-unstyled">
          <?php if (have_rows('depoimentos_de_alunos')) : while (have_rows('depoimentos_de_alunos')) : the_row(); ?>
              <li class="text-white students-tip-item <?php if (get_row_index() == 1) : ?> active <?php endif; ?>" data-list-item="<?php echo (get_row_index() - 1); ?>"></li>
          <?php endwhile;
          else : endif; ?>
        </ul>

      </div>
    </section>
    <section class="section-doubts light-orbs">
      <div class="container">
        <div class="text-center">
          <h2 class="fs-display-md text-white fw-medium m-0">
            <?php the_field('section_title_7nth') ?>
          </h2>
        </div>

        <?php if (have_rows("duvidas_lista")) : ?>
          <ul class="accordion list-unstyled my-5" id="accordion-doubts">
            <?php while (have_rows('duvidas_lista')) : the_row(); ?>
              <li class="accordion-item fs-title-lg mb-3 text-white">
                <div class="accordion-header">
                  <button class="accordion-button fs-title-lg fw-bold text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-doubts-<?php echo get_row_index() ?>" aria-expanded="true" aria-controls="collapse-doubts-0">
                    <?php the_sub_field('duvida'); ?>
                  </button>
                </div>
                <div id="collapse-doubts-<?php echo get_row_index(); ?>" class="accordion-collapse collapse mt-3" aria-labelledby="headingOne" data-bs-parent="#accordion-doubts">
                  <div class="accordion-body bg-blur">
                    <p class="m-0">
                      <?php the_sub_field('resposta'); ?>
                    </p>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>

        <div class="text-center text-white fs-title-lg">
          <figure class="m-0">
            <img src="<?php echo esc_html(get_field('icone_duvidas')['url']) ?>" alt="<?php echo esc_html(get_field('icone_duvidas')['alt']) ?>">
          </figure>
          <p class="my-4 mb-sm-5">
            <?php the_field('texto_icone_duvidas');?>
          </p>
          <a class="toodoo-button text-decoration-none" href="#">Fale conosco</a>
        </div>
      </div>
    </section>
    <section class="section-participate">
      <div class="container">
        <div class="participate-card light-orbs fs-headline-lg bg-blur text-white text-center">
          <p class="color-light-blue fw-bold mb-2"><?php the_field('titulo_do_card_duvidas');?></p>
          <p class="">
          <?php the_field('texto_card_duvidas');?>
          </p>
        </div>
      </div>
    </section>
  </main>
</section>
<?php get_footer('blastoff'); ?>