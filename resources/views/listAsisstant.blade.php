<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dashboard</title>
<link rel="stylesheet" href="<?php echo asset('css/screen.css') ?>" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="<?php echo asset('js/jquery/jquery-1.4.1.min.js') ?>" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="<?php echo asset('js/jquery/ui.core.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/jquery/ui.checkbox.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/jquery/jquery.bind.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  


<!--  styled select box script version 2 --> 
<script src="<?php echo asset('js/jquery/jquery.selectbox-0.5_style_2.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="<?php echo asset('js/jquery/jquery.selectbox-0.5_style_2.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="<?php echo asset('js/jquery/jquery.filestyle.js') ?>" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
      $("input.file_1").filestyle({ 
          image: "<?php echo asset('images/forms/choose-file.gif') ?>",
          imageheight : 21,
          imagewidth : 78,
          width : 310
      });
  });
</script>

<!-- Custom jquery scripts -->
<script src="<?php echo asset('js/jquery/custom_jquery.js') ?>" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="<?php echo asset('js/jquery/jquery.tooltip.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/jquery/jquery.dimensions.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 



<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="<?php echo asset('js/jquery/jquery.pngFix.pack.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
	
<div class="clear">&nbsp;</div>
  
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			
			<div class="nav-divider">&nbsp;</div>
			<a href="<?php echo url ('logout');?>" id="logout"><img src="<?php echo asset('images/shared/nav/nav_logout.gif') ?>" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="<?php echo url ('dashboard');?>"><b>Dashboard</b><!--[if IE 7]><!--></a><!--<![endif]-->
		
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="<?php echo url ('article');?>"><b>Article</b><!--[if IE 7]><!--></a><!--<![endif]-->
		
		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="<?php echo url ('loan');?>"><b>Loan</b><!--[if IE 7]><!--></a><!--<![endif]-->
		
		</li>
		</ul>
		
		
		<ul class="current"><li><a><b>Assistant</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li class="sub_show"><a href="<?php echo url ('listAsisstant');?>">List Asisstant</a></li>
				<li><a href="<?php echo url ('addAsisstant');?>">Add Assistant</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Recent Post Article</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="<?php echo asset('images/shared/side_shadowleft.jpg') ?>" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="<?php echo asset('images/shared/side_shadowright.jpg') ?>" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-repeat line-left minwidth-1"><a>Nama</a></th>
					<th class="table-header-repeat line-left"><a>Nim</a></th>
					<th class="table-header-repeat line-left"><a>Divisi</a></th>
					<th class="table-header-repeat line-left"><a>Jurusan</a></th>
					<th class="table-header-repeat line-left"><a>Angkatan</a></th>
					<th class="table-header-options line-left"><a>Options</a></th>

				</tr>
				@foreach ($asisstants as $asisstant)
				<tr>
					
					
					<td>{{$asisstant->nama}}</td>
					<td>{{$asisstant->nim}}</td>
					<td>{{$asisstant->divisi}}</td>
					<td>{{$asisstant->jurusan}}</td>
					<td>{{$asisstant->angkatan}}</td>
					<td class="options-width">
					<a href="{{route('asisstant.destroy',$asisstant->id)}}" title="Delete" class="icon-2 info-tooltip"></a>
					
					
					</td>
				</tr>
				@endforeach

				</table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
			
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>

</body>
</html>