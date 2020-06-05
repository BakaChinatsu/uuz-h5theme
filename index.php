<!DOCTYPE HTML>
<?php
/**
 * Created by PhpStorm.
 * User: Amamiya Chinatsu's
 * Date: 2020/6/4
 * Time: 15:00
 */
include_once 'lib/config.php';
?>
<html lang="<?php echo $html_lang;?>">
<!--
	Re-Edit by Amamiya Chinatsu
	github.com/BakaChinatsu/uuz-h5theme | @BakaChinatsu

	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!-- タグに表示するアイコン -->
        <link rel="icon" sizes="192x192" href="<?php echo $tag_icon;?>">
        <!-- ブラウザ要素の色 -->
        <meta name="theme-color" content="<?php echo $theme_color;?>">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style type="text/css">
            body {
                height: 100%;
                background-color: #ffffff;
                background-image: url("images/overlay.png"), url("images/<?php echo $background_filename;?>");
                background-repeat: repeat, no-repeat, no-repeat;
                background-size: 100px 100px, cover, cover;
                background-position: top left, center center, bottom center;
                background-attachment: fixed, fixed, fixed;
            }

            body:after {
                content: '';
                display: block;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: inherit;
                opacity: 0;
                z-index: 1;
                background-color: #ffffff;
                background-image: url("images/overlay.png");
                background-size: 100px 100px, cover;
                background-position: top left,		center center;
                -moz-transition: opacity 1.75s ease-out;
                -webkit-transition: opacity 1.75s ease-out;
                -ms-transition: opacity 1.75s ease-out;
                transition: opacity 1.75s ease-out;
            }

            body.is-preload:after {
                opacity: 1;
            }
		</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span class="avatar"><img src="images/<?php echo $avatar_filename; ?>" height="<?php ehco $avatar_height; ?>>" width="<?php echo $avatar_width; ?>" alt="" /></span>
							<h1><?php echo $main_title;?></h1>
							<p><?php echo $sec_title;?></p>
						</header>
						<!--
						<hr />
						<h2>Extra Stuff!</h2>
						<form method="post" action="#">
							<div class="fields">
								<div class="field">
									<input type="text" name="name" id="name" placeholder="Name" />
								</div>
								<div class="field">
									<input type="email" name="email" id="email" placeholder="Email" />
								</div>
								<div class="field">
									<select name="department" id="department">
										<option value="">Department</option>
										<option value="sales">Sales</option>
										<option value="tech">Tech Support</option>
										<option value="null">/dev/null</option>
									</select>
								</div>
								<div class="field">
									<textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
								</div>
								<div class="field">
									<input type="checkbox" id="human" name="human" /><label for="human">I'm a human</label>
								</div>
								<div class="field">
									<label>But are you a robot?</label>
									<input type="radio" id="robot_yes" name="robot" /><label for="robot_yes">Yes</label>
									<input type="radio" id="robot_no" name="robot" /><label for="robot_no">No</label>
								</div>
							</div>
							<ul class="actions special">
								<li><a href="#" class="button">Get Started</a></li>
							</ul>
						</form>
						<hr />
						-->
						<footer>
							<ul class="icons">
								<li><a href="<?php echo $site_url_01;?>" class="icon <?php echo $icon_style_01;?> <?php echo $site_icon_01;?>" target="_blank"><?php echo $site_name_01;?></a></li>
								<li><a href="<?php echo $site_url_02;?>" class="icon <?php echo $icon_style_02;?> <?php echo $site_icon_02;?>" target="_blank"><?php echo $site_name_02;?></a></li>
                                <li><a href="<?php echo $site_url_03;?>" class="icon <?php echo $icon_style_03;?> <?php echo $site_icon_03;?>" target="_blank"><?php echo $site_name_02;?></a></li>
							</ul>
						</footer>
						<ul class="actions special">
								<li><a href="<?php echo $button_url;?>" class="button"><?php echo $button_name;?></a></li>
							</ul>
					</section>

				<!-- Footer -->
					<footer id="footer">
                            <a>&copy; <?php echo $copyright; ?></a>
						<ul class="copyright">
                            <li>Use: <a href="https://github.com/BakaChinatsu/uuz-h5theme">uuz-h5theme</a></li>
							<li>Powered: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>