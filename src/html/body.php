<!-- Header -->
<!--<header class="header"-->
<!--		role="banner">-->
<!--</header>-->

<header>
<!-- Top Navigation -->
<?php if ($this->countModules('navbar')) : ?>
	<div class="navbar-fixed">
		<nav class="navbar col s12 green darken-4"
		 	role="navigation">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#!"
					   class="brand-logo">SV 08 Ludweiler</a>
					<a href="#"
					   data-activates="mobile-demo"
					   class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li>
							<jdoc:include type="modules" name="navbar" />
						</li>
						<li><jdoc:include type="modules" name="search-pos" /></li>
					</ul>
					<ul class="side-nav"
						id="mobile-demo">
						<li>
							<jdoc:include type="modules" name="navbar" />
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
<?php endif; ?>
<!-- Language module - if activated -->
<?php if ($this->countModules('language')) { ?>
	<jdoc:include type="modules"
				  name="language"
				  style="none"
				  title="<?php echo JText::_('TPL_JOOMBOOT_CHOOSE_LANGUAGE'); ?>"/>
<?php } ?>
<!-- Messages module -->
<jdoc:include type="message"/>
<!-- teaser-big -->
<?php if ($this->countModules('teaser-big')) : ?>
<div class="teaser-big-container">
	<div class="teaser-big col s12">
		<jdoc:include type="modules" name="teaser-big"/>
	</div>
</div>
<?php endif; ?>
<!-- sub-navbar -->
<?php if ($this->countModules('sub-navbar')) : ?>
	<nav class="sub-navigation col s12 green darken-3">
		<div class="container">
			<ul class="left">
				<li>
					<jdoc:include type="modules" name="sub-navbar" style="none"/>
				</li>
			</ul>
		</div>
	</nav>
<?php endif; ?>
</header>

<main class="content row">
	<?php if ($this->countModules('left')) : ?>
		<div class="row-left"">
			<jdoc:include type="modules" name="left"/>
		</main>
	<?php endif; ?>

	<div class="row-middle">

		<!-- sub-component-top -->
		<?php if ($this->countModules('sub-component-top')) : ?>
			<jdoc:include type="modules" name="sub-component-top" style="sv08section"/>
		<?php endif; ?>

		<!-- Main Content -->
		<jdoc:include type="component"/>

		<!-- sub-component-bottom -->
		<?php if ($this->countModules('sub-component-bottom')) : ?>
			<jdoc:include type="modules" name="sub-component-bottom"/>
		<?php endif; ?>
	</div>

	<?php if ($this->countModules('right')) : ?>
		<div class="row-right">
			<jdoc:include type="modules" name="right"/>
		</div>
	<?php endif; ?>
</main>

<?php if ($this->countModules('footer')) : ?>
	<footer class="page-footer green darken-4">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">SV 08 Ludweiler</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Menu</h5>
					<ul>
						<li><jdoc:include type="modules" name="navbar" /></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<jdoc:include type="modules" name="footer" />
<!--				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>-->
			</div>
		</div>
	</footer>
<?php endif; ?>

