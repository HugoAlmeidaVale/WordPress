<aside class="sidebar">
		<div id = "sidebar">
			
			<<?php  //imprimir o sidebar Mywidget1
				if ( !function_exists('dinamic_sidebar') || !dynamic_sidebar('Mywidget1')) : ?> 
			<?php endif ; ?>

		</div>
				<div id = "sidebar">
			
			<<?php  //imprimir o sidebar Mywidget2
				if ( !function_exists('dinamic_sidebar') || !dynamic_sidebar('Mywidget2')) : ?> 

				<?php endif ; ?>

		</div>




	</aside>