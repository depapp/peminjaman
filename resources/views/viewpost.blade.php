<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Article</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="<?php echo asset('css/style1.css') ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo asset('js/jshome/cufon-yui.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/jshome/cufon-replace.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/jshome/Myriad_Pro_300.font.js') ?>" type="text/javascript"></script>
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/ie_png.js"></script>
	<script type="text/javascript">
		 ie_png.fix('.png, #header .row-2 ul li a, #content, .list li');
	</script>
<![endif]-->
</head>
<body id="page1">
<div class="tail-top">
	<div class="tail-bottom">
		<div class="body-bg">
			<!-- HEADER -->
			<div id="header">
				
				<div class="row-1">
					
				</div>
				<div class="row-2">
					<ul>
						<li class="m1"><a href="<?php echo url ('index');?>" >Home</a></li>
						<li class="m2"><a href="<?php echo url ('assistant');?>">Assistant</a></li>
						<li class="m3"><a href="<?php echo url ('listarticle');?>" class="active">Article</a></li>
						<li class="m4"><a href="<?php echo url ('formLoan');?>">Rent Form</a></li>

					</ul>
				</div>
				
			</div>
			<!-- CONTENT -->
			<div id="content"><div class="inner_copy">More <a href="http://www.templates.com/">Website Templates</a> @ Templates.com!</div>
				<div class="tail-right">
					<div class="wrapper">
						<div class="col-1">
							<div class="indent">
								<div class="indent1">
									<h3>{{ $articles->title }}</h3>
									<p><img src="{{ asset('images/' . $articles->img) }}" width="500" height="300"/></p>
									<div style="text-align:justify"><p>{{ $articles->content }}</p></div>
									</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- FOOTER -->
			<div id="footer">
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>