<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php get_header(); 

	?>

	<main role="main">
			<?php get_template_part('loop'); ?>
	</main>


<?php get_footer(); ?>
</body>
</html>
<script type="text/javascript">
		$('.count').each(function () {
		    $(this).prop('Counter',0).animate({
		        Counter: $(this).text()
		    }, {
		        duration: 10000,
		        easing: 'swing',
		        step: function (now) {
		            $(this).text(Math.ceil(now));
		        }
		    });
		});
	</script>
	<script src="<?php echo bloginfo('template_url');?>/js/lib/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>



