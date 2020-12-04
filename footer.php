

<?php wp_footer() ?>

</body>
<footer>
    <?php wp_nav_menu(array("theme_location" => "footer_menu")) ?>
        <div id="bestil">
            <div id="bestil_tekst">
                <h3>Bestil tid</h3>
                <?php the_field('bestil_tid_beskrivelse'); ?>
                <button><a target="_blank" href="https://mette-pahuus.planway.com">Bestil tid</a></button>
            </div>
        </div>
        <div id="tider">
            <div id="tider_tekst">
                <h3>Telefontider</h3>
                <div id="dage">
                    <p>Mandag:</p>
                    <p>Tirsdag:</p>
                    <p>Onsdag:</p>
                    <p>Torsdag:</p>
                    <p>Fredag:</p>
                    <p>Lørdag:</p>
                    <p>Søndag:</p>
                </div>
                <div id="tidsp">
                    <p><?php the_field('mandag_tid'); ?></p>
                    <p><?php the_field('tirsdag_tid'); ?></p>
                    <p><?php the_field('onsdag_tid'); ?></p>
                    <p><?php the_field('torsdag_tid'); ?></p>
                    <p><?php the_field('fredag_tid'); ?></p>
                    <p><?php the_field('lordag_tid'); ?></p>
                    <p><?php the_field('sondag_tid'); ?></p>
                </div>
            </div>
        </div>
        <div id="kontakt">
            <div id="kontakt_tekst">
                <h3>Kontakt</h3>
                <div id="txt1">
                    <p>Telefon:</p>
                    <p>E-mail:</p>
                    <p>Adresse:</p>
                </div>
                
                <div id="txt2">
                    <p><?php the_field('telefon_'); ?></p>
                    <p><?php the_field('e-mail_'); ?></p>
                    <p><?php the_field('adresse'); ?></p>
                    <p><?php the_field('adresse_2'); ?></p>
                </div>
                <div id="some2">
                    <a target="_blank" href="https://www.facebook.com/mettepahuus.frisor/"><img src="<?php echo get_template_directory_uri()?>/assets/facebook.svg" alt=""></a>
                    <a target="_blank" href="https://www.instagram.com/mettepahuus.frisor/?hl=da"><img src="<?php echo get_template_directory_uri()?>/assets/insta_1.svg" alt=""></a>
                </div>
            </div>
            
        </div>
    </footer>


</html>