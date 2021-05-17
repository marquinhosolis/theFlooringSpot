<style>
	.dpNav {
		overflow: hidden;
		opacity: 0.7;
		font-family: "Courier New", Courier, monospace;
		font-size: 12px;
		font-weight: bold;
		color: #666;
		display: inline-flex;
		align-items: center;
	}

	.dpNav a {
		color: inherit;
		text-decoration: none;
	}

	.dpNav a:hover {
		text-decoration: underline;
	}

	.dpNavPoweredBy,
	.dpNavLogin {
		position: relative;
		top: -80px;
		-webkit-transition: all 500ms ease;
		-moz-transition: all 500ms ease;
		-ms-transition: all 500ms ease;
		-o-transition: all 500ms ease;
		transition: all 500ms ease;
	}

	.dpNavPoweredBy {
		text-align: right;
	}

	.logoDp {
		margin: 0 10px;
		-webkit-transition: all 500ms ease;
		-moz-transition: all 500ms ease;
		-ms-transition: all 500ms ease;
		-o-transition: all 500ms ease;
		transition: all 500ms ease;
		width: 40px;
		height: 40px;
		background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo-dppa.svg) no-repeat center center;
		background-position: top;
	}

	.dpNav:hover {
		opacity: 1;
	}

	.dpNav:hover .dpNavPoweredBy,
	.dpNav:hover .dpNavLogin {
		top: 0;
	}

	.dpNav:hover .logoDp {
		background-position: bottom;
	}
</style>
<div class="dpNav">
	<span class="dpNavPoweredBy"><a href="https://dppad.com/" target="_blank">Powered<br>by</a></span>
	<div class="logoDp"></div>
	<span class="dpNavLogin"><a href="<?php echo site_url(); ?>/wp-login.php/" target="_blank">Login</a></span>
</div>