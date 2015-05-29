<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Access Network Laboratory</title>
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
						<li class="m1"><a href="<?php echo url ('index');?>" class="active">Home</a></li>
						<li class="m2"><a href="<?php echo url ('assistant');?>">Assistant</a></li>
						<li class="m3"><a href="<?php echo url ('listarticle');?>">Article</a></li>
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
									<h3>Welcome to Access Network Laboratory</h3>
									<p>Laboratorium jaringan akses berdiri pada tahun 1992, berlokasi di Telkom Laboratorium Jaringan Akses Gedung N111, Fakultas Teknik, Telkom University</p>
									
								</div>
								<h4>Recent Articles</h4>
								<ul class="list">
								@foreach ($articles as $article)
									<?php 
									$articles->content = substr($article->content, 0, 300) . '..'; 
									?>
								@endforeach
								@foreach ($articles as $article)
									<li><strong><a href="{{ action('ArticleController@viewArticle', $article->id) }}">{{ $article->title }}</a>
										<div style="text-align:justify"></strong>{{ $articles->content }}</div></li>
								@endforeach
								</ul>
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