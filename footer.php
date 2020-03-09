   </main>
   <?php wp_footer(); ?>
   <footer class="container-fluid">
       <div class="row bleu">
           <div class="col-md-4 p-3 d-flex justify-content-center align-item align-items-center">


               <img src="<?php header_image(); ?>" alt="">





           </div>
           <div class="col-md-4 p-3 d-flex justify-content-center align-item align-items-center">


               <?php dynamic_sidebar('region-footer'); ?>



           </div>
           <div class="col-md-4 p-3 d-flex justify-content-center align-item align-items-center">

               <?php
                wp_nav_menu([
                    'container_class' => 'social-menu',
                    'menu_class'      => 'social-icons',
                    'link_before'     => '<span>',
                    'link_after'      => '</span>',
                    'theme_location'  => 'socialmenu',
                ]);
                ?>
           </div>
       </div>
   </footer>



   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery-3.4.1.slim.min.js"></script>
   <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap.min.js"></script>
   </body>

   </html>