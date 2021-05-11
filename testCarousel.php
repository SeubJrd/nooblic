<?php
/*
* Template Name: Carousel Articles
* Description: Page de test
*/

get_header();
?>


	<main id="primary" class="site-main">

        <div id="top-head" style="height: calc( 100vh - <?php echo $headerHeight ?> ); overflow: hidden; position: relative">
            <div style="transform-origin: top right; transform: rotate(22.5deg); box-shadow: 0px 0px 30px rgba(0,0,0,0.27); position: absolute; width: 25vw; height: 120vh"></div>
            <div style="transform-origin: top right; transform: rotate(45deg); box-shadow: 0px 0px 30px rgba(0,0,0,0.27); position: absolute; width: 20vw; height: 100vh"></div>
            <div style="box-shadow: 0px 0px 30px rgba(0,0,0,0.27); position: absolute; width: 70vw; height: 70vw; top: calc( ( 100vh - <?php echo $headerHeight ?> ) / 2 - 70vw / 2 ); right: calc(-70vw / 2); border-radius: 100000px"></div>
            <div style="box-shadow: 0px 0px 30px rgba(0,0,0,0.27); position: absolute; width: 45vw; height: 45vw; top: calc( ( 100vh - <?php echo $headerHeight ?> ) / 2 - 45vw / 2 ); right: calc(-45vw / 2); border-radius: 100000px"></div>
            <div id="trigger" style="box-shadow: 0px 0px 30px rgba(0,0,0,0.27); position: absolute; width: 20vw; height: 20vw; top: calc( ( 100vh - <?php echo $headerHeight ?> ) / 2 - 20vw / 2 ); right: calc(-20vw / 2); border-radius: 100000px"></div>

            <div id="crayon" style="position: absolute; left: 40vw; top: -10vw; transform-origin: top center; transform: rotate(11.25deg); display: flex; flex-direction: row">
                <div class="faceCrayon" style="background-color: #21759b; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon" style="background-color: #91859b; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon" style="background-color: #9b5873; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon" style="background-color: #7d539b; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon" style="background-color: #9b2521; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon" style="background-color: #319b33; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon" style="background-color: #21759b; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon" style="background-color: #91859b; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon" style="background-color: #9b5873; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon" style="background-color: #7d539b; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon" style="background-color: #9b2521; width: 20px; height: 130vh; position: absolute;"></div>
                <div class="faceCrayon" style="background-color: #319b33; width: 20px; height: 130vh; position: absolute;"></div>
            </div>

            <div style="margin-left: 60vw; width: 25vw; margin-top: 100px;">
                <div>
                    <h1>Explorons le<br>WEB Ensemble.</h1>
                    <p>Des recherches pédagogiques et avis personnels,<br>par des étudiants passionnés.</p>
                </div>
                <div style="display: flex; justify-content: flex-end; width: 80%; margin-left: auto; margin-top: 70px;">
                    <a href="#" class="n-button n-fill-primary" >Lire</a>
                    <a href="#" class="n-button n-outline-primary" style="margin-left: 20px;">À propos</a>
                </div>
            </div>

        </div>

        <div id="nyanCat" style="position: relative">
            <div style="position: absolute; top: 20px; right: 0; z-index: -1">
                <div style="background-color: red; height: 70px; width: 500px; box-shadow: 0px 0px 30px rgba(0,0,0,0.27);"></div>
                <div style="background-color: red; height: 70px; width: 500px; box-shadow: 0px 0px 30px rgba(0,0,0,0.27);"></div>
                <div style="background-color: red; height: 70px; width: 500px; box-shadow: 0px 0px 30px rgba(0,0,0,0.27);"></div>
            </div>
            <div style="box-shadow: 0px 0px 30px rgba(0,0,0,0.27); height: 60vh; width: 80%; margin: auto; border-radius: 50px; background-color: white">
            </div>
        </div>

		<?php the_content(); ?>


        <?php

            //Parms
            global $sizeCarousel1;
            $sizeCarousel1 = 0.45;

            global $sizeCarousel2;
            $sizeCarousel2 = 0.45;

            global $coloredMaskOpacity;
            $coloredMaskOpacity = 0.6;

            global $imageOpacity;
            $imageOpacity = 0.6;

            global $textColor;
            $textColor = "white";

            //fonctionnement
            global $loopIndex;
            $loopIndex = 0;

            global $indexLastColor;
            $indexLastColor = null; //definit la derniere couleur utilisée pour le remplacmeent d'image afin de ne pas avoir deux fois la meme à coté

            function calcSize( $image, $x, $y )
            {
                //def
                $size = array();
                $imageSize = getimagesize( $image );
                $ratioMask = $x / $y;
                $ratioImage = getimagesize( $image )[0]/getimagesize( $image )[1];

                if( $ratioImage > $ratioMask)
                {
                    $size["x"] = $imageSize[0]/$imageSize[1]*$y;
                    $size["y"] = $y;
                }
                else{
                    $size["y"] = $imageSize[1]/$imageSize[0]*$x;
                    $size["x"] = $x;
                }

                return $size;
            }

            function getRndColor( &$indexLastColor )
            {
                $colors = [ "#1B3C88", '#B84D97', '#12B4E1', '#E9483F', '#4AB277', '#ED6B1D' ];

                do{
                    $i = random_int(0, sizeof($colors)-1);
                }while( $i == $indexLastColor );

                $indexLastColor = $i;

                return $colors[$i];
            }
        ?>


        <div style="width: 100%; height: 50vh; display: flex; justify-content: center; justify-items: center; overflow: hidden; position: relative">
            <div id="carouselArticles" style="height: 100vh; position: absolute; top : 40px;">
        <?php
        $the_query = new WP_Query( 'posts_per_page=16' );
        while ($the_query -> have_posts()) : $the_query -> the_post();?>

            <?php if( $loopIndex < 7 ): ?>
                <?php if( get_the_post_thumbnail_url(get_the_ID(),'full') != null ): ?>
                    <a href="<?php echo get_post_permalink(get_the_ID())?>">
                        <div class="carouselItem" style='transform: rotate(0deg); position: absolute; transform-origin: bottom center;'>
                            <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 710.92 339.09" style='width: calc( 711px * <?php echo $sizeCarousel1 ?> ); height: calc( 339px * <?php echo $sizeCarousel1 ?> );'>
                                <defs>
                                    <mask fill="#000000" id="my-svg-mask">
                                        <title>Fp1</title>
                                        <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z" style="fill: #fff"/>
                                    </mask>
                                </defs>
                                <image mask="url(#my-svg-mask)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href='<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>'  width="<?php echo calcSize(get_the_post_thumbnail_url(get_the_ID(),'full'), 711, 339)['x'] ?>" height='<?php echo calcSize(get_the_post_thumbnail_url(get_the_ID(),'full'), 711, 339)['y'] ?>' x="0" y="0" ></image>
                                <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z" style="fill: #fff; fill-opacity: <?php echo $imageOpacity?>"/>
                                <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z" style="fill: #B84D97;fill-opacity: <?php echo $coloredMaskOpacity?>"/>
                            </svg>
                            <div style="position: absolute; top:0; height: calc( 339px * <?php echo $sizeCarousel1 ?> ); display: flex; justify-content: center; align-items: center">
                                <p style="padding: 0 30px; color: <?php echo $textColor?>; text-align: center; margin: auto 0"><?php echo the_title(); ?></p>
                            </div>
                        </div>
                    </a>
                <?php else: ?>
                    <a href="<?php echo get_post_permalink(get_the_ID())?>">
                        <div class="carouselItem" style='transform: rotate(0deg); position: absolute; transform-origin: bottom center;'>
                            <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 710.92 339.09" style='width: calc( 711px * <?php echo $sizeCarousel1 ?> ); height: calc( 339px * <?php echo $sizeCarousel1 ?> );'>
                                <title>Fp1</title>
                                <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z" style="fill: <?php echo getRndColor($indexLastColor)?>"/>
                                <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z" style="fill: #fff;fill-opacity: <?php echo $coloredMaskOpacity?>"/>
                            </svg>
                            <div style="position: absolute; top:0; height: calc( 339px * <?php echo $sizeCarousel1 ?> ); display: flex; justify-content: center; align-items: center">
                                <p style="padding: 0 30px; color: <?php echo $textColor?>; text-align: center; margin: auto 0"><?php echo the_title(); ?></p>
                            </div>
                        </div>
                    </a>
                <?php endif ?>

            <?php elseif ($loopIndex==7): ?> <!-- si c'est le dernier element du premier cercle -->
                <?php if( get_the_post_thumbnail_url(get_the_ID(),'full') != null ): ?>
                <a href="<?php echo get_post_permalink(get_the_ID())?>">
                    <div class="carouselItem" style='transform: rotate(0deg); position: absolute; transform-origin: bottom center;'>
                        <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 710.92 339.09" style='width: calc( 711px * <?php echo $sizeCarousel1 ?> ); height: calc( 339px * <?php echo $sizeCarousel1 ?> );'>
                            <defs>
                                <mask fill="#000000" id="my-svg-mask">
                                    <title>Fp1</title>
                                    <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z" style="fill: #fff"/>
                                </mask>
                            </defs>
                            <image mask="url(#my-svg-mask)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href='<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>'  width="<?php echo calcSize(get_the_post_thumbnail_url(get_the_ID(),'full'), 711, 339)['x'] ?>" height='<?php echo calcSize(get_the_post_thumbnail_url(get_the_ID(),'full'), 711, 339)['y'] ?>' x="0" y="0"></image>
                            <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z" style="fill: #fff; fill-opacity: <?php echo $imageOpacity?>"/>
                            <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z" style="fill: #B84D97;fill-opacity: <?php echo $coloredMaskOpacity?>"/>
                        </svg>
                        <div style="position: absolute; top:0; height: calc( 339px * <?php echo $sizeCarousel1 ?> ); display: flex; justify-content: center; align-items: center">
                            <p style="padding: 0 30px; color: <?php echo $textColor?>; text-align: center; margin: auto 0"><?php echo the_title(); ?></p>
                        </div>
                    </div>
                </a>
                <?php else: ?>
                <a href="<?php echo get_post_permalink(get_the_ID())?>">
                    <div class="carouselItem" style='transform: rotate(0deg); position: absolute; transform-origin: bottom center;'>
                        <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 710.92 339.09" style='width: calc( 711px * <?php echo $sizeCarousel1 ?> ); height: calc( 339px * <?php echo $sizeCarousel1 ?> );'>
                            <title>Fp1</title>
                            <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z" style="fill: <?php echo getRndColor($indexLastColor)?>"/>
                            <path d="M111.3,338.37c163.07-67.54,338.05-62.69,489.24-.25L710.75,72.05C491.47-18.6,237.63-25.69,1.09,72.29l-.42.18L110.89,338.54Z" style="fill: #fff;fill-opacity: <?php echo $coloredMaskOpacity?>"/>
                        </svg>
                        <div style="position: absolute; top:0; height: calc( 339px * <?php echo $sizeCarousel1 ?> ); display: flex; justify-content: center; align-items: center">
                            <p style="padding: 0 30px; color: <?php echo $textColor?>; text-align: center; margin: auto 0"><?php echo the_title(); ?></p>
                        </div>
                    </div>
                </a>
                <?php endif ?>
                </div>
                <div id="carouselArticles2" style="height: 100vh; position: absolute; top: 40px;">

            <?php else: ?>
                <?php if( get_the_post_thumbnail_url(get_the_ID(),'full') != null ): ?>
                    <a href="<?php echo get_post_permalink(get_the_ID())?>">
                        <div class="carouselItem" style='transform: rotate(0deg); position: absolute; transform-origin: bottom center;'>
                            <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490 317" style='width: calc( 490px * <?php echo $sizeCarousel2 ?> ); height: calc( 317px * <?php echo $sizeCarousel2 ?> );'>
                                <defs>
                                    <mask fill="#000000" id="my-svg-mask2">
                                        <title>Fp2</title>
                                        <path d="M111.36,316.57a349.43,349.43,0,0,1,267.69-.25L489.83,48.9C338.64-13.55,163.65-18.4.59,49.14l-.42.18L111,316.74Z" style="fill: #fff"/>
                                    </mask>
                                </defs>
                                <image mask="url(#my-svg-mask2)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href='<?php the_post_thumbnail(); ?>'  width="<?php echo calcSize(get_the_post_thumbnail_url(get_the_ID(),'full'), 490, 317)['x'] ?>" height='<?php echo calcSize(get_the_post_thumbnail_url(get_the_ID(),'full'), 490, 317)['x'] ?>' x="0" y="0"></image>
                                <path d="M111.36,316.57a349.43,349.43,0,0,1,267.69-.25L489.83,48.9C338.64-13.55,163.65-18.4.59,49.14l-.42.18L111,316.74Z" style="fill: #fff;fill-opacity: <?php echo $imageOpacity?>"/>
                                <path d="M111.36,316.57a349.43,349.43,0,0,1,267.69-.25L489.83,48.9C338.64-13.55,163.65-18.4.59,49.14l-.42.18L111,316.74Z" style="fill: #B84D97;fill-opacity: <?php echo $coloredMaskOpacity?>"/>
                            </svg>
                            <div style="position: absolute; top:0; height: calc( 317px * <?php echo $sizeCarousel2 ?> ); display: flex; justify-content: center; align-items: center">
                                <p style="padding: 0 30px; color: <?php echo $textColor?>; text-align: center; margin: auto 0"><?php the_title(); ?></p>
                            </div>
                        </div>
                    </a>
                <?php else: ?>
                    <a href="<?php echo get_post_permalink(get_the_ID())?>">
                        <div class="carouselItem" style='transform: rotate(0deg); position: absolute; transform-origin: bottom center;'>
                            <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490 317" style='width: calc( 490px * <?php echo $sizeCarousel2 ?> ); height: calc( 317px * <?php echo $sizeCarousel2 ?> );'>
                                <title>Fp2</title>
                                <path d="M111.36,316.57a349.43,349.43,0,0,1,267.69-.25L489.83,48.9C338.64-13.55,163.65-18.4.59,49.14l-.42.18L111,316.74Z" style="fill: <?php echo getRndColor($indexLastColor)?>"/>
                                <path d="M111.36,316.57a349.43,349.43,0,0,1,267.69-.25L489.83,48.9C338.64-13.55,163.65-18.4.59,49.14l-.42.18L111,316.74Z" style="fill: #fff;fill-opacity: <?php echo $coloredMaskOpacity?>"/>
                            </svg>
                            <div style="position: absolute; top:0; height: calc( 317px * <?php echo $sizeCarousel2 ?> ); display: flex; justify-content: center; align-items: center">
                                <p style="padding: 0 30px; color: <?php echo $textColor?>; text-align: center; margin: auto 0"><?php the_title(); ?></p>
                            </div>
                        </div>
                    </a>
                <?php endif ?>

            <?php endif ?>

        <?php $loopIndex++ ?>
        <?php endwhile;wp_reset_postdata();?>
            </div>
        </div>


	</main><!-- #main -->

<?php

get_footer();
