<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body x-data="{ 'showModal': false, isOpen: false }" @keydown.escape="isOpen = false" <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header>


	<nav class="navbar w-full z-50 bg-primary text-white"
         :class="{ 'shadow-lg bg-primary border-b border-white border-opacity-20' : isOpen , 'bg-primary' : !isOpen}">

        <div class="container mx-auto">
            <div class="navbar-wrap ">
                <div class="navbar-wrap__item">
                    <div class="flex justify-between">
                        <div class="navbar__logo p-5">
                        <?php if ( has_custom_logo() ) { ?>
                        <?php the_custom_logo(); ?>
                        <?php } else { ?>
                       <a href="<?php echo get_bloginfo( 'url' ); ?>">
                       <?php echo get_bloginfo( 'name' ); ?>
                       	</a>
                        </div>


                        <button aria-label="menu" x-cloak @click="isOpen = !isOpen"
                                type="button"
                                class="shadow-xl bg-white bg-opacity-5 block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white"
                                :class="{ 'transition transform-180': isOpen }">

                            <div class="icon icon-lg text-3xl icon-close" x-show="isOpen"></div>
                            <div class="icon icon-lg text-2xl icon-burger" x-show="!isOpen"></div>

                        </button>
                    </div>




<nav x-cloak class="navbar-menu leading-loose bg-primary "
                         :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
                         @click.away="isOpen = false"
                         x-show.transition="true">
                    <?php
                    				wp_nav_menu(
                    					array(
                    						'container_id'    => 'primary-menu',
                    						'container' => 'ul',
                    						'container_class' => 'p-2 w-full',
                    						'menu_class'      => 'lg:flex',
                    						'theme_location'  => 'primary',

                    						'li_class'        => 'navbar-menu__item',
                    						'fallback_cb'     => false,
                    					)
                    				);
                    				?>
                    				</nav>

</div>
                <div class="navbar-wrap__item hidden justify-end">

                    <div class="navbar-item mr-5">
                        <a href="">

                            		<?php echo get_option('site_telephone', ''); ?>
                            		</a>
                    </div>

                    <div class="navbar-item">
                        <button x-data="{id:'modal-example'}" x-on:click="bsd(true), $dispatch('modal-overlay',{id})" class="btn btn-secondary btn-regular">Заказать звонок</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>


						<?php } ?>


	</header>



		<?php if ( is_front_page() ) : ?>

<?php
    if( get_theme_mod( 'theme_header_bg' ) != '') { // if there is a background img
        $theme_header_bg = get_theme_mod('theme_header_bg'); // Assigning it to a variable to keep the markup clean
    }
?>


		<div  style="background-image:url('<?php echo $theme_header_bg ?>');" class="banner bg-primary banner-hero">
            <div class="container mx-auto">
                <div class="row">
                    <div class="relative z-40">
                        <h1 class="text-3xl lg:text-7xl tracking-tight font-extrabold text-white mb-4"><?php echo get_option('banner-title', 'Заголовок'); ?></h1>
                        <h3 class="font-bold text-lg text-white uppercase"><?php echo get_option('banner-sub_title', 'Подзаголовок'); ?></h3>

                    </div>
                    <a aria-label="scroll bottom" x-data @click="$scroll('#home')"
                       class="icon icon-lg icon-arrow-b text-white text-4xl animate-bounce icon-transparent icon-hero">
                    </a>
                </div>
            </div>


        </div>





		<?php endif; ?>




<div
    class="fixed bg-primary bg-opacity-70 inset-0 z-50 flex items-center justify-center"
    x-data="{modal:false}"
    x-show="modal"
    x-on:modal-overlay.window="if ($event.detail.id == 'modal-example') modal=true"
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-500"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    x-cloak>
	<div
        class="bg-white rounded-lg w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6"
        x-show="modal"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4"
        x-on:click.away="modal=false, bsd(false)">


		   <div class="flex justify-between items-center pb-3 mb-5">
		   <div class="flex items-center">
		   <span class="icon icon-mail text-3xl mr-3"></span>
                      <p class="text-2xl font-bold">Отправьте заявку</p>
                      </div>
                      <div class="cursor-pointer z-50" @click="showModal = false">
                          <span class="icon icon-close text-3xl"></span>
                      </div>
                  </div>
			   <?php echo do_shortcode('[contact-form-7 id="73" title="Контактная форма 1"]'); ?>

	</div>
</div>


<script>
    function bsd(status) {
      var body = document.querySelector("body");

      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

      window.onscroll = function () {};

      if (status === true) {
            // Check window scroll exists else use traditional method
            if (window.onscroll !== null) {
                  // if any scroll is attempted, set this to the previous value
                  window.onscroll = function () {
                        window.scrollTo(scrollLeft, scrollTop);
                  };
            } else {
                  //body.classList.add("fixed", "overflow-y-scroll");
            }
      } else {
            //body.classList.remove("fixed", "overflow-y-scroll");
            window.onscroll = function () {};
      }
}

</script>


		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
