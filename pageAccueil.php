<?php
/*
* Template Name: Page d'accueil
* Description: Page de test
*/

get_header();
?>


    <main id="primary" class="site-main">

        <div id="top-head" style="height: calc( 140vh - <?php echo $headerHeight ?> ); overflow: hidden; position: relative">
            <div style="transform-origin: top right; transform: rotate(22.5deg); box-shadow: 0px 0px 30px rgba(0,0,0,0.27); position: absolute; width: 25vw; height: 160vh; min-width: 222px"></div>
            <div style="transform-origin: top right; transform: rotate(45deg); box-shadow: 0px 0px 30px rgba(0,0,0,0.27); position: absolute; width: 20vw; height: 100vh; min-width: 219px"></div>
            <div id="th-logo" style="transform-origin: top right; position: absolute; width: 5vw; height: 15vw; left: 4vw; top: 2vw; min-width: 52px;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 209.38 271.11">
                    <g id="Calque_2" data-name="Calque 2">
                        <g id="Calque_2-2" data-name="Calque 2">
                            <g>
                                <line x1="9.57" y1="241.72" x2="56.84" y2="86.88" style="fill: #e9483f;stroke: #e9483f;stroke-miterlimit: 10;stroke-width: 20px"/>
                                <line x1="150.97" y1="185.62" x2="199.82" y2="25.61" style="fill: #b84c96;stroke: #b84c96;stroke-miterlimit: 10;stroke-width: 20px"/>
                                <line x1="151.92" y1="185.31" x2="75.1" y2="27.07" style="fill: none;stroke: #ed6b1d;stroke-miterlimit: 10;stroke-width: 20px"/>
                                <line x1="75.1" y1="27.07" x2="56.83" y2="86.89" style="fill: none;stroke: #4ab277;stroke-miterlimit: 10;stroke-width: 20px"/>
                                <line x1="132.96" y1="243.67" x2="151.68" y2="183.47" style="fill: none;stroke: #0060ac;stroke-miterlimit: 10;stroke-width: 20px"/>
                                <line x1="132.96" y1="243.67" x2="57.35" y2="87.93" style="fill: #00b4e1;stroke: #00b4e1;stroke-miterlimit: 10;stroke-width: 20px"/>
                                <polygon points="45.95 87.32 58.85 114.43 67.48 86.12 54.52 59.76 45.95 87.32" style="fill: #99553f"/>
                                <polygon points="64.61 27.43 77.33 54.43 85.81 26.25 73.02 0 64.61 27.43" style="fill: #195527"/>
                                <polygon points="122.02 243.75 135.06 271.11 143.81 242.54 130.7 215.94 122.02 243.75" style="fill: #203c87"/>
                                <polygon points="140.61 184.46 153.49 211.53 162.12 183.26 149.18 156.94 140.61 184.46" style="fill: #7e2885"/>
                            </g>
                            <polygon points="207.36 0.81 190.25 22.71 209.38 28.52 207.36 0.81" style="fill: #b84c96"/>
                            <polygon points="2.02 266.53 19.14 244.62 0 238.8 2.02 266.53" style="fill: #e9483f"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="circle1" style="box-shadow: 0px 0px 30px rgba(0,0,0,0.27); z-index: -1; position: absolute; width: 70vw; height: 70vw; top: calc( ( 100vh - <?php echo $headerHeight ?> ) / 2 - 70vw / 2 ); right: calc(-70vw / 2); border-radius: 100000px; background-color: white"></div>
            <div class="circle2" style="box-shadow: 0px 0px 30px rgba(0,0,0,0.27); z-index: -1; position: absolute; width: 45vw; height: 45vw; top: calc( ( 100vh - <?php echo $headerHeight ?> ) / 2 - 45vw / 2 ); right: calc(-45vw / 2); border-radius: 100000px; background-color: white"></div>
            <div class="circle3" id="trigger" style="box-shadow: 0px 0px 30px rgba(0,0,0,0.27); position: absolute; width: 20vw; height: 20vw; top: calc( ( 100vh - <?php echo $headerHeight ?> ) / 2 - 20vw / 2 ); right: calc(-20vw / 2); border-radius: 100000px; background-color: white"></div>

            <div id="crayon"
                 style="position: absolute; left: 40vw; top: -10vw; transform-origin: top center; transform: rotate(11.25deg); display: flex; flex-direction: row">
                <div class="faceCrayon"
                     style="background-color: #21759b; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon"
                     style="background-color: #91859b; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon"
                     style="background-color: #9b5873; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon"
                     style="background-color: #7d539b; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon"
                     style="background-color: #9b2521; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon"
                     style="background-color: #319b33; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon"
                     style="background-color: #21759b; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon"
                     style="background-color: #91859b; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon"
                     style="background-color: #9b5873; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon"
                     style="background-color: #7d539b; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon"
                     style="background-color: #9b2521; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon"
                     style="background-color: #319b33; width: 20px; height: 130vh; position: absolute;"></div>
            </div>

            <div style="margin-left: 60vw; width: 25vw; margin-top: 20vh;">
                <div>
                    <h1>Explorons le<br>WEB Ensemble.</h1>
                    <p>Des recherches pédagogiques et avis personnels,<br>par des étudiants passionnés.</p>
                </div>
                <div style="display: flex; justify-content: flex-end; width: 80%; margin-left: auto; margin-top: 70px;">
                    <a href="#" class="n-button n-fill-primary">Lire</a>
                    <a href="#" class="n-button n-outline-primary" style="margin-left: 20px;">À propos</a>
                </div>
            </div>

            <a id="scollInvite" href="#nyanCat"><span></span></a>

        </div>

        <div id="nyanCat" style="margin-top: -40vh; display: flex; flex-direction: row; align-items: center; justify-content: flex-end">
            <div style="z-index: 1; box-shadow: 0px 0px 30px rgba(0,0,0,0.27); min-height: 60vh; max-width: 864px; width: 70%; border-radius: 40px; background-color: white; overflow: hidden">
                <div id="NCslider" class="NParentGrid" style="width: 300%; padding: 30px 20px 30px 20px; margin-left: -0%;">
                    <div>
                        <h2>Nos articles les plus commentés</h2>
                        <ul class="Ngrid" style="padding: 0; margin: 0;">
                            <?php $popular = new WP_Query('orderby=comment_count&posts_per_page=6'); ?> <?php while ($popular->have_posts()) : $popular->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>')">
                                    <div style="display: flex; justify-content: space-between; flex-direction: column; position: absolute; bottom: 0; background-color: rgba(184,77,151,0.91); width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; padding: 5px 10px; min-height: 100px;">
                                        <span style="align-self: flex-start; color: white"><?php the_title(); ?></span>
                                        <span style="justify-self: flex-end ; align-self: flex-end; color: white; display: flex; flex-direction: row;"><span style="display: flex; align-items: center;"><?php pvc_post_views( get_the_ID(), true );?></span> <span style="font-size: 1rem; margin-bottom: 5px"><i style="margin-right: 5px;" class="fas fa-comments"></i><?php comments_number('0', '1', '%'); ?></span></span>
                                      </div>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div>
                        <h2>Nos articles les plus lus</h2>
                        <ul class="Ngrid" style="padding: 0; margin: 0;">
                            <?php $popular = new WP_Query('orderby=post_views&posts_per_page=6'); ?> <?php while ($popular->have_posts()) : $popular->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>')">
                                    <div style="display: flex; justify-content: space-between; flex-direction: column; position: absolute; bottom: 0; background-color: rgba(184,77,151,0.91); width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; padding: 5px 10px; min-height: 100px;">
                                        <span style="align-self: flex-start; color: white"><?php the_title(); ?></span>
                                        <span style="justify-self: flex-end ; align-self: flex-end; color: white; display: flex; flex-direction: row;"><span style="display: flex; align-items: center;"><?php pvc_post_views( get_the_ID(), true );?></span> <span style="font-size: 1rem; margin-bottom: 5px"><i style="margin-right: 5px;" class="fas fa-comments"></i><?php comments_number('0', '1', '%'); ?></span></span>
                                    </div>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div>
                        <h2>Nos articles les plus récents</h2>
                        <ul class="Ngrid" style="padding: 0; margin: 0;">
                            <?php $popular = new WP_Query('posts_per_page=6'); ?> <?php while ($popular->have_posts()) : $popular->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>')">
                                    <div style="display: flex; justify-content: space-between; flex-direction: column; position: absolute; bottom: 0; background-color: rgba(184,77,151,0.91); width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; padding: 5px 10px; min-height: 100px;">
                                        <span style="align-self: flex-start; color: white"><?php the_title(); ?></span>
                                        <span style="justify-self: flex-end ; align-self: flex-end; color: white; display: flex; flex-direction: row;"><span style="display: flex; align-items: center;"><?php pvc_post_views( get_the_ID(), true );?></span> <span style="font-size: 1rem; margin-bottom: 5px"><i style="margin-right: 5px;" class="fas fa-comments"></i><?php comments_number('0', '1', '%'); ?></span></span>
                                    </div>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div style="z-index: 2">
                <div style="display: flex; align-items: center; color: white; padding-left: 20px; background-color: rgb(233, 72, 63); height: <?php echo cos(-2 * M_PI / 6) * 100 ?>px; width: 40vw;"></div>
                <div id="NC_Trig1" style="display: flex; align-items: center; color: white; padding-left: 20px; background-color: rgb(27, 60, 136); height: <?php echo cos(-M_PI / 6) * 100 ?>px; width: 40vw; cursor: pointer;" >Articles les plus commentés</div>
                <div id="NC_Trig2" style="display: flex; align-items: center; color: white; padding-left: 20px; background-color: rgb(237, 107, 29); height: <?php echo cos(0) * 100 ?>px; width: 40vw; cursor: pointer;">Articles les plus lus</div>
                <div id="NC_Trig3" style="display: flex; align-items: center; color: white; padding-left: 20px; background-color: rgb(74, 178, 119); height: <?php echo cos(M_PI / 6) * 100 ?>px; width: 40vw; cursor: pointer;">Articles les plus récents</div>
                <div style="display: flex; align-items: center; color: white; padding-left: 20px; background-color: rgb(184, 77, 151); height: <?php echo cos(2 * M_PI / 6) * 100 ?>px; width: 40vw;"></div>
                <div style="display: flex; align-items: center; color: white; padding-left: 20px; background-color: purple; height: <?php echo cos(3 * M_PI / 6) * 100 ?>px; width: 40vw;"></div>
            </div>
        </div>

        <?php
                        /*Je n'ai pas pu me séparer de ce code :') trop de temps passé dessus*/
        /*
        ?>
        <?php

        //Parms
        global $sizeCarousel1;
        $sizeCarousel1 = 0.5;

        global $sizeCarousel2;
        $sizeCarousel2 = 0.5;

        global $coloredMaskOpacity;
        $coloredMaskOpacity = 0.80;

        global $imageOpacity;
        $imageOpacity = 0.2; //max 0

        global $NoImageOpacity;
        $NoImageOpacity = 0.2; //max 0

        global $textColor;
        $textColor = "white";

        global $colors;
        $colors = ["#1B3C88", '#B84D97', '#12B4E1', '#E9483F', '#4AB277', '#ED6B1D'];

        //fonctionnement
        global $loopIndex;
        $loopIndex = 0;

        global $indexLastColor;
        $indexLastColor = null; //definit la derniere couleur utilisée pour le remplacmeent d'image afin de ne pas avoir deux fois la meme à coté

        function calcSize($image, $x, $y)
        {
            //def
            $size = array();
            $imageSize = getimagesize($image);
            $ratioMask = $x / $y;
            $ratioImage = getimagesize($image)[0] / getimagesize($image)[1];

            if ($ratioImage > $ratioMask) {
                $size["x"] = $imageSize[0] / $imageSize[1] * $y;
                $size["y"] = $y;
            } else {
                $size["y"] = $imageSize[1] / $imageSize[0] * $x;
                $size["x"] = $x;
            }

            return $size;
        }

        function getRndColor(&$indexLastColor, $colors)
        {

            do {
                $i = random_int(0, sizeof($colors) - 1);
            } while ($i == $indexLastColor);

            $indexLastColor = $i;

            return $colors[$i];
        }

        ?>


        <div id="carouselContainer" style="width: 100%; height: 60vh; display: flex; justify-content: center; justify-items: center; overflow: hidden; position: relative">
            <div id="carouselArticles" style="height: 110vh; position: absolute; top : 40px; left: 25vw;">
                <?php
                $the_query = new WP_Query('posts_per_page=16');
                while ($the_query->have_posts()) :
                $the_query->the_post(); ?>

                <?php if ($loopIndex < 7): ?>
                    <?php if (get_the_post_thumbnail_url(get_the_ID(), 'full') != null): ?>
                        <a href="<?php echo get_post_permalink(get_the_ID()) ?>">
                            <div class="carouselItem"
                                 style='transform: rotate(0deg); position: absolute; transform-origin: bottom center;'>
                                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 710.92 339.09"
                                     style='width: calc( 711px * <?php echo $sizeCarousel1 ?> ); height: calc( 339px * <?php echo $sizeCarousel1 ?> );'>
                                    <defs>
                                        <mask fill="#000000" id="my-svg-mask">
                                            <title>Fp1</title>
                                            <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z"
                                                  style="fill: #fff"/>
                                        </mask>
                                    </defs>
                                    <image mask="url(#my-svg-mask)" xmlns:xlink="http://www.w3.org/1999/xlink"
                                           xlink:href='<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>'
                                           width="<?php echo calcSize(get_the_post_thumbnail_url(get_the_ID(), 'full'), 711, 339)['x'] ?>"
                                           height='<?php echo calcSize(get_the_post_thumbnail_url(get_the_ID(), 'full'), 711, 339)['y'] ?>'
                                           x="0" y="0"></image>
                                    <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z"
                                          style="fill: #fff; fill-opacity: <?php echo $imageOpacity ?>"/>
                                    <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z"
                                          style="fill: #B84D97;fill-opacity: <?php echo $coloredMaskOpacity ?>"/>
                                </svg>
                                <div style="position: absolute; top:0; height: calc( 339px * <?php echo $sizeCarousel1 ?> ); display: flex; justify-content: center; align-items: center">
                                    <p style="padding: 0 30px; color: <?php echo $textColor ?>; text-align: center; margin: auto 0"><?php echo the_title(); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo get_post_permalink(get_the_ID()) ?>">
                            <div class="carouselItem"
                                 style='transform: rotate(0deg); position: absolute; transform-origin: bottom center;'>
                                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 710.92 339.09"
                                     style='width: calc( 711px * <?php echo $sizeCarousel1 ?> ); height: calc( 339px * <?php echo $sizeCarousel1 ?> );'>
                                    <title>Fp1</title>
                                    <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z"
                                          style="fill: <?php echo getRndColor($indexLastColor, $colors) ?>"/>
                                    <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z"
                                          style="fill: #fff;fill-opacity: <?php echo $NoImageOpacity ?>"/>
                                </svg>
                                <div style="position: absolute; top:0; height: calc( 339px * <?php echo $sizeCarousel1 ?> ); display: flex; justify-content: center; align-items: center">
                                    <p style="padding: 0 30px; color: <?php echo $textColor ?>; text-align: center; margin: auto 0"><?php echo the_title(); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endif ?>

                <?php elseif ($loopIndex == 7): ?> <!-- si c'est le dernier element du premier cercle -->
                <?php if (get_the_post_thumbnail_url(get_the_ID(), 'full') != null): ?>
                    <a href="<?php echo get_post_permalink(get_the_ID()) ?>">
                        <div class="carouselItem"
                             style='transform: rotate(0deg); position: absolute; transform-origin: bottom center;'>
                            <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 710.92 339.09"
                                 style='width: calc( 711px * <?php echo $sizeCarousel1 ?> ); height: calc( 339px * <?php echo $sizeCarousel1 ?> );'>
                                <defs>
                                    <mask fill="#000000" id="my-svg-mask">
                                        <title>Fp1</title>
                                        <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z"
                                              style="fill: #fff"/>
                                    </mask>
                                </defs>
                                <image mask="url(#my-svg-mask)" xmlns:xlink="http://www.w3.org/1999/xlink"
                                       xlink:href='<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>'
                                       width="<?php echo calcSize(get_the_post_thumbnail_url(get_the_ID(), 'full'), 711, 339)['x'] ?>"
                                       height='<?php echo calcSize(get_the_post_thumbnail_url(get_the_ID(), 'full'), 711, 339)['y'] ?>'
                                       x="0" y="0"></image>
                                <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z"
                                      style="fill: #fff; fill-opacity: <?php echo $imageOpacity ?>"/>
                                <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z"
                                      style="fill: #B84D97;fill-opacity: <?php echo $coloredMaskOpacity ?>"/>
                            </svg>
                            <div style="position: absolute; top:0; height: calc( 339px * <?php echo $sizeCarousel1 ?> ); display: flex; justify-content: center; align-items: center">
                                <p style="padding: 0 30px; color: <?php echo $textColor ?>; text-align: center; margin: auto 0"><?php echo the_title(); ?></p>
                            </div>
                        </div>
                    </a>
                <?php else: ?>
                    <a href="<?php echo get_post_permalink(get_the_ID()) ?>">
                        <div class="carouselItem"
                             style='transform: rotate(0deg); position: absolute; transform-origin: bottom center;'>
                            <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 710.92 339.09"
                                 style='width: calc( 711px * <?php echo $sizeCarousel1 ?> ); height: calc( 339px * <?php echo $sizeCarousel1 ?> );'>
                                <title>Fp1</title>
                                <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z"
                                      style="fill: <?php echo getRndColor($indexLastColor, $colors) ?>"/>
                                <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z"
                                      style="fill: #fff;fill-opacity: <?php echo $NoImageOpacity ?>"/>
                            </svg>
                            <div style="position: absolute; top:0; height: calc( 339px * <?php echo $sizeCarousel1 ?> ); display: flex; justify-content: center; align-items: center">
                                <p style="padding: 0 30px; color: <?php echo $textColor ?>; text-align: center; margin: auto 0"><?php echo the_title(); ?></p>
                            </div>
                        </div>
                    </a>
                <?php endif ?>
            </div>
            <div id="carouselArticles2" style="height: 110vh; position: absolute; top: 40px; left: 25vw;">

                <?php else: ?>
                    <?php if (get_the_post_thumbnail_url(get_the_ID(), 'full') != null): ?>
                        <a href="<?php echo get_post_permalink(get_the_ID()) ?>">
                            <div class="carouselItem"
                                 style='transform: rotate(0deg); position: absolute; transform-origin: bottom center;'>
                                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 490 317"
                                     style='width: calc( 490px * <?php echo $sizeCarousel2 ?> ); height: calc( 317px * <?php echo $sizeCarousel2 ?> );'>
                                    <defs>
                                        <mask fill="#000000" id="my-svg-mask2">
                                            <title>Fp2</title>
                                            <path d="M111.36,316.57a349.43,349.43,0,0,1,267.69-.25L489.83,48.9C338.64-13.55,163.65-18.4.59,49.14l-.42.18L111,316.74Z"
                                                  style="fill: #fff"/>
                                        </mask>
                                    </defs>
                                    <image mask="url(#my-svg-mask2)" xmlns:xlink="http://www.w3.org/1999/xlink"
                                           xlink:href='<?php the_post_thumbnail(); ?>'
                                           width="<?php echo calcSize(get_the_post_thumbnail_url(get_the_ID(), 'full'), 490, 317)['x'] ?>"
                                           height='<?php echo calcSize(get_the_post_thumbnail_url(get_the_ID(), 'full'), 490, 317)['x'] ?>'
                                           x="0" y="0"></image>
                                    <path d="M111.36,316.57a349.43,349.43,0,0,1,267.69-.25L489.83,48.9C338.64-13.55,163.65-18.4.59,49.14l-.42.18L111,316.74Z"
                                          style="fill: #fff;fill-opacity: <?php echo $imageOpacity ?>"/>
                                    <path d="M111.36,316.57a349.43,349.43,0,0,1,267.69-.25L489.83,48.9C338.64-13.55,163.65-18.4.59,49.14l-.42.18L111,316.74Z"
                                          style="fill: #B84D97;fill-opacity: <?php echo $coloredMaskOpacity ?>"/>
                                </svg>
                                <div style="position: absolute; top:0; height: calc( 317px * <?php echo $sizeCarousel2 ?> ); display: flex; justify-content: center; align-items: center">
                                    <p style="padding: 0 30px; color: <?php echo $textColor ?>; text-align: center; margin: auto 0"><?php the_title(); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo get_post_permalink(get_the_ID()) ?>">
                            <div class="carouselItem"
                                 style='transform: rotate(0deg); position: absolute; transform-origin: bottom center;'>
                                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 490 317"
                                     style='width: calc( 490px * <?php echo $sizeCarousel2 ?> ); height: calc( 317px * <?php echo $sizeCarousel2 ?> );'>
                                    <title>Fp2</title>
                                    <path d="M111.36,316.57a349.43,349.43,0,0,1,267.69-.25L489.83,48.9C338.64-13.55,163.65-18.4.59,49.14l-.42.18L111,316.74Z"
                                          style="fill: <?php echo getRndColor($indexLastColor, $colors) ?>"/>
                                    <path d="M111.36,316.57a349.43,349.43,0,0,1,267.69-.25L489.83,48.9C338.64-13.55,163.65-18.4.59,49.14l-.42.18L111,316.74Z"
                                          style="fill: #fff;fill-opacity: <?php echo $NoImageOpacity ?>"/>
                                </svg>
                                <div style="position: absolute; top:0; height: calc( 317px * <?php echo $sizeCarousel2 ?> ); display: flex; justify-content: center; align-items: center">
                                    <p style="padding: 0 30px; color: <?php echo $textColor ?>; text-align: center; margin: auto 0"><?php the_title(); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endif ?>

                <?php endif ?>

                <?php $loopIndex++ ?>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>


    </main><!-- #main -->
        */
?>

<div style="margin-bottom: 20px"></div>

<?php
wp_reset_query(); // necessary to reset query
while ( have_posts() ) : the_post();
    the_content();
endwhile; // End of the loop.
?>

<?php

get_footer();
