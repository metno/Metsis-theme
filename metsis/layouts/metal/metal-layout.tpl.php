<div class="l-page">
    <header class="l-header" role="banner">
        <div class="responsive-header">
            <div class="logo-title-div">
	            <div class="div-logo">
		        	<?php if ($logo): ?>
		              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" ><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="site-logo"/></a>
		            <?php endif; ?>
	            </div>
            </div>
            <div class="intra-search-div">
              <div class="div-intranet">
                  <a href="#" rel="intranet"><?php print t('Intranet'); ?></a>
              </div>
              <div class="h-gutter"></div>
              <div class="div-search">
                  <?php print render($page['search']); ?>
              </div>
            </div>
            <?php print render($page['branding']); ?>
        </div>
    </header>
    <div class="h-gutter"></div>
    <div id="menu" class="head-menu">
        <div id="menu-home" class="navigation-home"><a href="<?php print $front_page; ?>" rel="home"><?php print t('Home'); ?></a></div>
        <div id="menu4" class="navigation"><?php print render($page['navigation']); ?></div>
    </div>
    <div class="h-gutter"></div>
	<div class="l-main">
		<div class="l-content" role="main">
            <?php print render($page['highlighted']); ?>
            <?php print $breadcrumb; ?>
			<a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?> 
            <?php print render($tabs); ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
			<ul class="action-links"><?php print render($action_links); ?>
			</ul>
            <?php endif; ?>
			<div class="upper-content">
            <?php print render($page['metalcontent']); ?>
			</div>
			<div class="responsive-grid">
				<div class="center">
					<div style="padding: 0.5em;">
						<metalmiddle>
                    		<?php print render($page['metalmiddle']); ?>
						</metalmiddle> <!-- /metalmiddle -->
					</div>
				</div>
				<div class="left">
					<div style="padding: 0.5em;">
						<metalleft>
                    		<?php print render($page['metalleft']); ?>
						</metalleft> <!-- /metalleft -->
					</div>
				</div>
				<div class="right">
					<div style="padding: 0.5em;">
						<metalright>
                    		<?php print render($page['metalright']); ?>
						</metalright> <!-- /metalright -->
					</div>
				</div>
			</div>
            <?php print $feed_icons; ?>
		</div>
	</div>
    <div class="h-gutter"></div>
    <footer class="l-footer" role="contentinfo">
    <div class="responsive-footer">
        <div class="contact-div">
            <div id="contact" class="contact"><?php print render($page['contactinfo']); ?></div>
        </div>
        <div class="sitemap-div">
            <div id="sitemap" class="sitemap">
                <div class="sitemap-menu">
                   <?php print render($page['sitemap']); ?>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div>
