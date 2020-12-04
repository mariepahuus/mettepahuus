<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php bloginfo("Mette Pahuus") ?></title>
    <?php wp_head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
</head>


    <!-- <div id="vue-app">
        <v-app>
            <v-main> -->
    <header>
        <div id="logo">
           <a href="../"> <img id="mette" src="<?php echo get_template_directory_uri()?>/assets/logomettee.png" alt=""> </a>  
        </div>
        <div id="menu">
            <?php wp_nav_menu(array("theme_location" => "header_menu")) 
            ?>
        </div>
        <div id="some">
            <a target="_blank" href="https://www.facebook.com/mettepahuus.frisor/"><img src="<?php echo get_template_directory_uri()?>/assets/facebook.svg" alt=""></a>
            <a target="_blank" href="https://www.instagram.com/mettepahuus.frisor/?hl=da"><img src="<?php echo get_template_directory_uri()?>/assets/insta_1.svg" alt=""></a>
        </div>
    </header>
    
    <body>