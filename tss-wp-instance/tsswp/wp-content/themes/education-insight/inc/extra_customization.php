<?php 

	$education_insight_sticky_header = get_theme_mod('education_insight_sticky_header');

	$education_insight_custom_style= "";

	if($education_insight_sticky_header != true){

		$education_insight_custom_style .='.wrap_figure.fixed{';

			$education_insight_custom_style .='position: static;';
			
		$education_insight_custom_style .='}';
	}