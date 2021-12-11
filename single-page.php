<?php
  /**
  * Template Name: Custom
  */
get_header(); ?>


     <?php
             $customizer_repeater_example = get_theme_mod('customizer_repeater_example', json_encode( array()) );
             $customizer_repeater_partners = get_theme_mod('customizer_repeater_partners', json_encode( array()) );
              /*This returns a json so we have to decode it*/
             $customizer_repeater_example_decoded = json_decode($customizer_repeater_example);
             $customizer_repeater_partners_decoded = json_decode($customizer_repeater_partners);
     ?>




<div class="container mx-auto my-12">
  <?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; ?>

	<?php endif; ?>
</div>
		<?php if ( is_front_page() ) : ?>

	<section id="home" class="my-20">
        <div class="container mx-auto">
            <div class="row">
                <h1 class="entry-title text-2xl lg:text-5xl font-extrabold leading-tight mb-5">Преимущества</h1>
                <p class="mb-5"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aut, culpa distinctio
                    doloremque
                    dolores est facere inventore maiores mollitia natus nesciunt officia perferendis placeat praesentium
                    quis reiciendis sunt veritatis.</p>
            </div>
        </div>





        <div class="block">
            <div class="banner">

                <div class="container mx-auto">
                    <div class="row">
                        <div class="">
                            <div class="grid relative lg:grid-cols-3 grid-cols-1 gap-4 lg:my-10">


              <?php foreach($customizer_repeater_example_decoded as $repeater_item):?>

                                <div class="card bg-white group transition-all duration-150 hover:shadow-lg">
                                    <div class="card-body text-center">
                                        <span class="icon icon-lg transition-all duration-300 group-hover:bg-secondary icon-primary my-4 text-3xl <?php  echo $repeater_item->icon_value; ?>"></span>
                                        <h3 class="card-title title-small"><?php echo $repeater_item->title; ?></h3>
                                        <p class="card-text"><?php echo $repeater_item->text; ?>
                                        </p>
                                    </div>
                                </div>


              <?php endforeach; ?>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partners" class="my-10 mb-20 lg:relative">
        <div class="container mx-auto">
            <div class="row">
                <div class="content">
                    <div class="flex justify-between w-full items-center">
                        <h2 class="entry-title text-2xl lg:text-5xl font-extrabold leading-tight mb-5">Наши партнеры</h2>

                        <div class="slider-nav__wrap flex">

                            <a role="button" href="#" class="arrow-left mr-2 icon icon-sm text-primary icon-transparent border border-primary hover:bg-primary hover:text-white border-primary  border-opacity-20 icon-arrow-l text-2xl">
                            </a>

                            <a role="button" href="#"
                               class="arrow-right icon-arrow-r text-2xl icon icon-sm text-primary  icon-transparent border hover:bg-primary hover:text-white border-primary border-opacity-20">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                     <?php foreach($customizer_repeater_partners_decoded as $repeater_item):?>
                           <div class="swiper-slide p-5">
                               <img class="lazy-loaded" src="<?php  echo $repeater_item->image_url ?>" data-lazy-type="image" alt="<?php  echo $repeater_item->title ?>">
                           </div>
                     <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>


			<?php endif; ?>
<?php get_footer(); ?>
</div>