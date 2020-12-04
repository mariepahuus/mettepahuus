<!-- /*
 * Template Name: Forside
 */ -->

<?php get_header() ?>


    <main>
        <div id="caro">
              <?php
                echo do_shortcode('[smartslider3 slider="2"]');
                ?>
        </div>
        <div id="text_box">
            <div id="text">
                
                <h1>
                    <?php the_field('overskrift_et'); ?>
                </h1>
                <h2>
                    <?php the_field('overskrift_to'); ?>
                </h2>
                <div id="box_1">
                    <p>
                        <?php the_field('tekst_'); ?>
                    </p>
               
            </div>
            <div id="box_2">
                <img id="mette" src="<?php the_field("billede_")?>" alt="">
                
            </div>
            <div id="mette2">
                <h2>
                    <?php the_field('overskrift_tre'); ?>
                </h2>
            </div>
            </div>
            <div id="video">
                <div id="video_1">
                    <h2>
                        <?php the_field('video_overskrift_1'); ?>
                    </h2>
                    <?php
                        echo do_shortcode("[ytplayer id=289]"); 
                    ?>
                </div>
                <div id="video_1">
                    <h2>
                        <?php the_field('video_overskrift_2'); ?>
                    </h2>
                    <?php 
                        echo do_shortcode("[ytplayer id=290]"); 
                    ?>
                </div>
            </div>
    </main>
    
</v-main>
</v-app>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <script src="js/app.js"></script>
</body>
</html>


<?php get_footer() ?>