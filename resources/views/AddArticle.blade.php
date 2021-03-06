<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Article</title>
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
		                    
		<ul class="current"><li><a href="<?php echo url ('article');?>"><b>Article</b><!--[if IE 7]><!--></a><!--<![endif]-->

		
		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="<?php echo url ('loan');?>"><b>Loan</b><!--[if IE 7]><!--></a><!--<![endif]-->
		
		</li>
		</ul>
		
		
		<ul class="select"><li><a><b>Assistant</b><!--[if IE 7]><!--></a><!--<![endif]-->
			<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo url ('listAsisstant');?>">List Asisstant</a></li>
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



<div id="page-heading"><h1>Post Article</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!-- start id-form -->
		{!! Form::open(['url'=>'article','files' => true])!!}
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Title:</th>
			<td><input type="text" class="inp-form" name="title" required="required"/></td>
			<td></td>
		</tr>
		<tr>
		<th valign="top">Category:</th>
		<td>	
		<select  class="styledselect_form_1" name="category" required="required">
			<option value="">Select</option>
			<option value="UID">UID</option>
			<option value="SNSD">SNSD</option>
			<option value="AND">AND</option>
			<option value="GIS">GIS</option>
			<option value="Praktikum">Praktikum</option>
		</select>
		</td>
		<td></td>
		</tr>
	<tr>
		<th valign="top">Content:</th>
		<td><textarea rows="" cols="" class="form-textarea" name="content"></textarea></td>
		<td></td>
	</tr>
	<tr>
	<th>Image:</th>
	<td><input type="file" class="file_1" name="img" required="required"/></td>
	</tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
	{!! Form::close()!!}
	<!-- end id-form  -->

	</td>
	
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
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
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>
 
</body>
</html>