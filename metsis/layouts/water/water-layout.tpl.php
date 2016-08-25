<div class="l-page">
    <header class="l-header" role="banner">
        <div class="responsive-header">
            <div class="logo-title-div">
	            <div class="div-logo">
		        	<?php if ($logo): ?>
		              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" ><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="site-logo"/></a>
		            <?php endif; ?>
	            </div>
	            <div class="div-sitename">
		            <?php if ($site_name || $site_slogan): ?>
		              <?php if ($site_name): ?>
		                <h1 class="site-name">
		                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">Svalbard Integrated Earth Observing System <br/>- The Knowledge Centre</a>
		                </h1>
		              <?php endif; ?>
		            <?php endif; ?>
	            </div>
            </div>
            <div class="intra-search-div">
              <div class="div-intranet">
                <h1>
                    <a href="#" rel="intranet"><?php print t('Intranet'); ?></a>
                </h1>
              </div>
              <div class="h-gutter"></div>
              <div class="div-search">
                <h1 class="search">
                    <?php print render($page['search']); ?>
                </h1>
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
            <?php print render($page['watercontent']); ?>
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
