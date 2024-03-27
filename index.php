<?php get_header(); ?>
<main>
        <section class="hero">
            <div class="hero-content">
                <header>
                    <?php if(get_theme_mod('cs_hero_logo')) { ?>
                        <img src="<?php echo get_theme_mod('cs_hero_logo') ?>" alt="Logo marca da Salomone de Oliveira sociedade de advogados">
                    <?php } ?>
                    <h1><?php echo get_theme_mod('cs_hero_title', 'sofreu multa ou TEVE SUA CNH CASSADA ou suspensa?'); ?></h1>
                    <p id="hero_caption"><?php echo get_theme_mod('cs_hero_caption', 'Somos um escritório de advocacia especializado em Direito de Trânsito.'); ?></p> 
                    <p id="hero_call"><?php echo get_theme_mod('cs_hero_call', 'Clique e receba nossa ajuda em seu caso!'); ?></p>
                    <a href="<?php echo get_theme_mod('cs_link_cta', '#'); ?>" id="button_hero"><?php echo get_theme_mod('cs_hero_button_text', 'Falar com especialista'); ?></a>
                </header>
                <div class="hero-img">
                    <img src="<?php echo get_theme_mod('cs_hero_feature_image' ) ?>" alt="">
                </div>
            </div>   
        </section>
        <section class="data">
            <div class="card-data">
                <div class="card-data-content">
                    <h3>
                        + <?php echo get_theme_mod('cs_cases_attended', '000'); ?>
                    </h3>
                    <span>Casos atendidos</span>
                </div>
            </div>
            <div class="card-data">
                <div class="card-data-content">
                    <h3>
                        <?php echo get_theme_mod('cs_cases_won', '00'); ?>%
                    </h3>
                    <span>Dos casos ganhos</span>
                </div>
            </div>
            <div class="card-data">
                <div class="card-data-content">
                    <h3>
                        <?php echo get_theme_mod('cs_years_history', '00'); ?>
                    </h3>
                    <span>Anos de história</span>
                </div>
            </div>
        </section>
        <section class="cases">
            <div class="cases-image">
                <img src="<?php echo get_theme_mod('cs_case_image' ) ?>" alt="">
            </div>
            <div class="cases-content">
                <header>
                    <h2><?php echo get_theme_mod('cs_case_title', 'Você deve ser encaixar em algum desses casos'); ?></h2>
                </header>
                <div class="card-cases">
                <?php
                $cases_query = new WP_Query(array(
                    'post_type' => 'case', 
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));

                if ($cases_query->have_posts()) {
                    while ($cases_query->have_posts()) {
                        $cases_query->the_post();
                        ?>
                        <div class="case">
                            <div class="case-header">
                               <?php the_post_thumbnail(array(52, 52)); ?>
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <p><?php the_content(); ?></p>
                            <hr />
                        </div>
                        
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
                <a id="button_case" href="<?php echo get_theme_mod('cs_link_cta', '#'); ?>"><?php echo get_theme_mod('cs_case_button_text', 'Fale com um especialista'); ?></a>
            </div>
        </section>
        <section class="acting">
            <header>
                <h2><?php echo get_theme_mod('cs_acting_title', 'Como funciona nossa atuação'); ?></h2>
            </header>
            <div class="acting-cards">
            <?php
                $actuations_query = new WP_Query(array(
                    'post_type' => 'acting', 
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));

                if ($actuations_query->have_posts()) {
                    while ($actuations_query->have_posts()) {
                        $actuations_query->the_post();
                        ?>
                        <div class="acting-card">
                            <?php the_post_thumbnail(array(45, 45)); ?>
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_content(); ?></p>
                        </div>
                        
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </div>
            <div class="button-action">
                <a id="button_acting" href="<?php echo get_theme_mod('cs_link_cta', '#'); ?>"><?php echo get_theme_mod('cs_acting_button_text', 'Fale com um especialista'); ?></a>
            </div>
        </section>
        <section class="testimony">
            <div class="testimony-description">
                <header>
                    <h2>Mostramos na prática como atuamos!</h2>
                </header>
                <p>Confira depoimentos reais de pessoas que passaram pela mesma situação e conseguiram sucesso com a nossa ajuda:</p>
            </div>
            <div class="slider">
                <div class="carousel">
                <?php
                $testimonials_query = new WP_Query(array(
                    'post_type' => 'testimony', 
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));

                if ($testimonials_query->have_posts()) {
                    while ($testimonials_query->have_posts()) {
                        $testimonials_query->the_post();
                        ?>
                        <div class="carousel-cell"><?php the_post_thumbnail(); ?></div>
                        
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="contact-content">
                <div class="contact-description">
                    <header>
                        <h2>ESTÁ PRONTO PARA <span>VOLTAR A DIRIGIR?</span></h2>
                    </header>
                    <p>Clique no botão abaixo, ou preencha o formulário para podermos te ajudar.</p>
                    <div class="button-container">
                        <a href="<?php echo get_theme_mod('cs_link_cta', '#'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_button.svg" alt=""><span>Falar Com Especialista</span></a>
                    </div>
                </div>
                <div class="form">
                    <p>Se preferir, deixe seu contato que entraremos em contato com você!</p>
                    <div class="form-group">
                        <div class="form-control">
                            <label for="name">Nome</label>
                            <input type="text" id="name">
                        </div>
                        <div class="form-control">
                            <label for="phone">Telefone</label>
                            <input type="text" id="phone">
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="email">E-mail</label>
                        <input type="text" id="email">
                    </div>
                    <div class="form-control">
                        <label for="city">Cidade</label>
                        <input type="text" id="city">
                    </div>
                    <div class="form-control">
                        <label for="city">Qual é o seu caso?</label>
                        <select name="case" id="case">
                            <option value="Fui pego no bafômetro">Pego no bafômetro</option>
                            <option value="Recorrer multas">Recorrer multas</option>
                            <option value="CNH suspensa">CNH suspensa</option>
                        </select>
                    </div>
                    <button type="submit">Enviar</button>
                </div>
            </div>   
        </section>
        <section class="faq">
            <header>
                <h2>Ainda restam dúvidas?</h2>
                <p>Confira as principais perguntas frequentes:</p>
            </header>
            <?php
                $faqs_query = new WP_Query(array(
                    'post_type' => 'faq', 
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));

                if ($faqs_query->have_posts()) {
                    while ($faqs_query->have_posts()) {
                        $faqs_query->the_post();
                        ?>
                        <div class="question">
                            <p><?php the_title(); ?></p>
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icon.png" alt=""></span>
                        </div>
                        <div class="answer">
                            <?php the_content(); ?>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
        </section>
        <section class="about">
            <div class="about-content">
                <header>
                    <h2>Sobre <span>nosso escritório</span></h2>
                </header>
                <p>Visamos atender as exigências de um novo mercado, mais qualificado e exigente, que busca um suporte jurídico especializado em várias áreas do direito.</p>
                <p>Solucionar e esclarecer sobre as mais diversas questões jurídicas, com seriedade e eficiência, é o compromisso de Salomone de Oliveira Sociedade de Advogados na busca de seus direitos.</p>
                <p>São os conceitos que fundamentam as relações entre nós e nossos clientes!</p>

                <a href="<?php echo get_theme_mod('cs_link_cta', '#'); ?>">Falar Com Especialista</a>
            </div>
            <div class="about-slider">

            </div>
        </section>
        <section class="address">
            <div class="map">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.png" alt="">
            </div>
            <div class="address-content">
                <header>
                    <h2>nosso <span>endereço e contato</span></h2>
                </header>
                <hr>
                <address>
                    <div class="location">
                        <h4 class="title-address">Localização</h4>
                        <p class="description-address">Av. Cel. Marcos de Andrade, 141 - 401 - Centro Viamão - RS, 94410-050</p>
                    </div>
                    <div class="phone">
                        <h4 class="title-address">Telefone</h4>
                        <p class="description-address">(051) 984596212</p>
                    </div>
                </address>
            </div>
        </section>
    </main>
<?php get_footer(); ?>