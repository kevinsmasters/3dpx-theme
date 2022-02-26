<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) || is_active_sidebar( 'footer-5' ) ) {?>
        <div id="footer-widget" class="row m-0">
            <div class="container">
                <div class="row"><?php // TODO: CHANGE THIS TO FLEX ?>
                    <div class="col col-md-3">
                        <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                            <div class="widget-col footer-1"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col col-md-8 offset-md-1">
                        <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                            <div class="widget-col footer-2"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                        <?php endif; ?>
                        <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                            <div class="widget-col footer-3"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                        <?php endif; ?>
                        <?php if ( is_active_sidebar( 'footer-4' )) : ?>
                            <div class="widget-col footer-4"><?php dynamic_sidebar( 'footer-4' ); ?></div>
                        <?php endif; ?>
                        <?php if ( is_active_sidebar( 'footer-5' )) : ?>
                            <div class="widget-col footer-5"><?php dynamic_sidebar( 'footer-5' ); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

<?php }
