<?php get_header() ?>
<main>

        <div id="caro">
            <?php
                echo do_shortcode('[smartslider3 slider="3"]');
            ?>
        </div>
        <div id="text_box">
            <div id="text_1">
                <h1>
                    <?php the_field('overskrift_et'); ?>
                </h1>
                <p>
                    <?php the_field('tekst_et'); ?>
                </p> 
                <div id="pics">
                    <img src="<?php the_field("billede_et")?>" alt="Lernberger Stafsing, Produkter, Pharmacy, Scalp Serum, Shampoo, Hår Vitaminer, Hair Vitamines, Anti Dandruff, Skælshampoo">
                    <img src="<?php the_field("billede_to")?>" alt="Lernberger Stafsing, Produkter, Shampoo, Balsam, Conditioner, Hårkur, Voks, Til kvinder, Hairmask">
                    <img src="<?php the_field("billede_tre")?>" alt="Lernberger Stafsing, Produkter, Shampoo, Balsam, Conditioner, Hårkur, Voks, Til mænd, Hairmask">
                    
                </div>
               
            </div>
            <div id="text_1">
                <h1>
                     <?php the_field('overskrift_to'); ?>
                </h1>
                <p>
                    <?php the_field('tekst_to'); ?>
                </p> 
                <div id="pics">
                    <img src="<?php the_field("billede_fire")?>" alt="Diva Jern, Diva Stylingjern, Stylingjern, Glattejern, Fladjern, Krøllejern, Flat Iron">
                    <img src="<?php the_field("billede_fem")?>" alt="Diva Jern, Diva Stylingjern, Krøllejern, Curlingiron, Curling Wand">
                    <img src="<?php the_field("billede_seks")?>" alt="Diva Jern, Diva Stylingjern, Føntørre, Føn, Defuser, Diffuser">
                </div>
            </div>
            <div id="text_1">
                <h1>
                    <?php the_field('overskrift_tre'); ?>
                </h1>
                <p>
                    <?php the_field('tekst_tre'); ?>
                </p> 
                <div id="pics">
                    <img src="<?php the_field("billede_syv")?>" alt="Revitalash, Øjenvippeserum, Vippe Serum, Serum, Vipper, Øjenbrynsserum, Bryn Serum, Øjenbryn">
                    <img src="<?php the_field("billede_otte")?>" alt="Revitalash, Øjenvippeserum, Vippe Serum, Serum, Vipper, Øjenbrynsserum, Bryn Serum, Øjenbryn">
                    <img src="<?php the_field("billede_ni")?>" alt="Revitalash, Øjenvippeserum, Vippe Serum, Serum, Vipper, Øjenbrynsserum, Bryn Serum, Øjenbryn, Prisliste">
                </div>
            </div>
        </div>
    </main>
    <?php get_footer() ?>