
</main>

<?php do_action( 'tailpress_content_end' ); ?>



<?php do_action( 'tailpress_content_after' ); ?>


<?php
    if( get_theme_mod( 'theme_footer_bg' ) != '') { // if there is a background img
        $theme_footer_bg = get_theme_mod('theme_footer_bg'); // Assigning it to a variable to keep the markup clean
    }
?>



<section id="contact" class="">

    <div style="background-image:url('<?php echo $theme_footer_bg ?>');" class="banner lg:relative bg-contact  bg-opacity-10">
         <div class="contact-inner w-full relative overflow-hidden">

                  <div class="container mx-auto my-10">
                      <div class="row ">
                          <div class="flex w-full items-center justify-center">
                              <div class="bg-white border border-primary border-opacity-20 rounded-lg form-block group lg:w-1/2 z-50 p-5">
                                  <div class="form-header">

                                      <div class="flex items-center">

                                          <div>
                                              <span class="icon icon-sm transition-all duration-300 group-hover:bg-secondary group-hover:text-white icon-gray my-4 mr-5 icon-mail text-2xl"></span>
                                          </div>

                                          <div class="form-group">
                                              <h4 class="title title-sm font-bold text-primary">Свяжитесь с нами</h4>
                                              <span class="title-small">Наш менеджер вам перезвонит</span>
                                          </div>
                                      </div>

                                  </div>
                                  <?php echo do_shortcode('[contact-form-7 id="73" title="Контактная форма 1"]'); ?>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
    </div>





    <footer id="colophon" class="bg-primary text-white p-5 z-50 relative" role="contentinfo">

        <div class="container mx-auto">
            <div class="footer-wrap justify-between items-center flex">

                <div class="flex">
                    <div>
                        <span class="icon icon-sm bg-black bg-opacity-40 border-white  mr-3 icon-marker text-2xl"></span>
                    </div>
                    <div class="flex flex-col">
                        <p class="pb-2">
                        	<?php do_action( 'tailpress_footer' ); ?>


                        		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
                        Адрес: г. Нур-Султан, ул. Толе би 40, НП-6</p>
                        <a rel="noopener nofollow" class="underline" target="_blank" href="https://go.2gis.com/pcho2h">Посмотреть
                            в тугис</a>
                    </div>
                </div>

                <div class="py-5 mr-5">

                    <div class="">
                 
                    </div>

                </div>


            </div>
        </div>
    </footer>
</section>

</div>



<?php wp_footer(); ?>

</body>
</html>
