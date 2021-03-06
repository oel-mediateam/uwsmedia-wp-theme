			
			<!-- footer -->
			<footer class="footer d-flex flex-wrap" role="contentinfo">
                
                <div class="container d-flex align-items-center flex-wrap">
                    
                    <div class="row">
                        
                        <div class="col-2 col-sm-2 col-md-2 col-lg-1 d-flex align-items-center flex-wrap">
                            <img class="footer-logo" src="<?php echo get_option('footer_logo_option'); ?>" alt="UWEX Media Services" />
                        </div>
                        
                        <div class="col-10 col-sm-8 col-md-8 col-lg-9 d-flex align-items-center flex-wrap">
                            
                            <!-- copyright -->
            				<p class="copyright">&copy; <?php echo date('Y'); ?>.  <?php echo get_option('copyright_option'); ?></p>
            				<!-- /copyright -->
                            
                        </div>
                        
                        <div class="col-12 col-sm-2 col-md-2 col-lg-2 d-flex align-items-center flex-wrap">
                            
                            <?php if ( is_user_logged_in() ) {
                                
                                $currentUser = wp_get_current_user()->user_firstname;
                                
                                if ( empty( $currentUser ) ) {
                                    $currentUser = wp_get_current_user()->user_login;
                                }
                                
                            ?>
                                
                                <p class="user-info">Hi, <?php echo $currentUser; ?>!<br>
                                <?php echo '<a href="' . get_dashboard_url() . '">Dashboard</a>'; ?>
                                &bull; <?php echo '<a href="' . wp_logout_url( home_url() ) . '">Logout</a>'; ?></p>
                                
                            <?php } else { ?>
                                
                                <div class="login-btn">
                                    
                                    <?php
                                        
                                        $redirectLink = get_permalink();
                                        
                                        if ( is_front_page() ) {
                                            $redirectLink = get_site_url();
                                        }
                                        
                                        echo '<a href="' . wp_login_url( $redirectLink ) . '">Login</a>';
                                        
                                        ?>
                                    
                                </div>
                                
                            <?php } ?>
                            
                        </div>
                        
                    </div>
                    
                </div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->
        
		<?php wp_footer(); ?>

	</body>
</html>
