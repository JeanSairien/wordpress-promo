<?php
/*
* Template Name: La promo
*/
?>
<?php get_header(); ?>

<?php
$string = file_get_contents("profiles.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["FrontEnd"];

?>

<div class="listApprenant row">
	
	<div class="textApprenant col-lg-offset-2 col-lg-8  col-md-offset-2 col-md-8  col-sm-offset-3 col-sm-6  col-xs-offset-1 col-xs-10">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate aperiam maiores officia, dolor molestiae veniam aliquam facilis, exercitationem ratione suscipit aspernatur incidunt, natus laboriosam quas, explicabo iusto corporis accusamus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate aperiam maiores officia, dolor molestiae veniam aliquam facilis, exercitationem ratione suscipit aspernatur incidunt.</p>
	</div>

<!-- = = = = Colone Front-end = = = = -->


	<div class="front col-lg-6 col-md-6 col-sm-6 col-xs-6">

		<h2 class="frontTitre">Front-end</h2>
		<?php
			foreach ($top as $elements) {
				echo "<div class='apprenant col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-offset-2 col-sm-8 col-lg-offset-2 col-xs-8'>

							<img class='img-responsive imgApprenant' src='" . get_template_directory_uri()."/".$elements['IMG'] . "' alt=''>

							<div class='infoBox'>
								<h4>" . $elements['NAME'] . "</h4>
								<p>" . $elements['INFO'] . "</p>
								<div class='progress'>
									<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100' style='width:80%'>HTML5/CSS3</div>
								</div>
								<div class='progress'>
									<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:60%'>" . $elements['SKILLS'] . "</div>
								</div>
							</div>

							<h3 class='nomApprenant'>" . $elements['NAME'] . "</h3>
							<a href='". $elements['CV'] . "' class='btnCv'>CV</a>
							<a href='" . $elements['PORTFOLIO'] . "' class='btnFolio'>PORTFOLIO</a>
						</div>";
			}
		?> 
			

			

			
			
	</div>



<!-- = = = = Colone Back-end = = = = -->


	<div class="back col-lg-6 col-md-6 col-sm-6 col-xs-6">

		<h2 class="backTitre">Back-end</h2>

			<div class="apprenant col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-offset-2 col-sm-8 col-lg-offset-2 col-xs-8">
				<img class="img-responsive imgApprenant" src="img/img-apprenant/people-2.png" alt="">

				<!-- hidden info box-->

				<div class="infoBox">
					<h4>Lorem Ben Ipsum</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempora eos totam!</p>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">HTML5/CSS3</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">JS</div>
					</div>
				</div>

				<!-- Fin hidden info box-->

				<h3 class="nomApprenant">Aït Lorem Ben Ipsum</h3>
				<a href="" class="btnCv">CV</a>
				<a href="" class="btnFolio">PORTFOLIO</a>
			</div>

			<div class="apprenant col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-offset-2 col-sm-8 col-lg-offset-2 col-xs-8">
				<img class="img-responsive imgApprenant" src="" alt="">

				<!-- hidden info box-->

				<div class="infoBox">
					<h4>Lorem Ben Ipsum</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempora eos totam!</p>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">HTML5/CSS3</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">JS</div>
					</div>
				</div>

				<!-- Fin hidden info box-->

				<h3 class="nomApprenant">Lorem Ben Ipsum</h3>
				<a href="" class="btnCv">CV</a>
				<a href="" class="btnFolio">PORTFOLIO</a>
			</div>

			<div class="apprenant col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-offset-2 col-sm-8 col-lg-offset-2 col-xs-8">
				<img class="img-responsive imgApprenant" src="" alt="">

				<!-- hidden info box-->

				<div class="infoBox">
					<h4>Lorem Ben Ipsum</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempora eos totam!</p>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">HTML5/CSS3</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">JS</div>
					</div>
				</div>

				<!-- Fin hidden info box-->
				
				<h3 class="nomApprenant">Lorem Ben Ipsum</h3>
				<a href="" class="btnCv">CV</a>
				<a href="" class="btnFolio">PORTFOLIO</a>
			</div>

			<div class="apprenant col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-offset-2 col-sm-8 col-lg-offset-2 col-xs-8">
				<img class="img-responsive imgApprenant" src="" alt="">

				<!-- hidden info box-->

				<div class="infoBox">
					<h4>Lorem Ben Ipsum</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempora eos totam!</p>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">HTML5/CSS3</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">JS</div>
					</div>
				</div>

				<!-- Fin hidden info box-->
				
				<h3 class="nomApprenant">Lorem Ben Ipsum</h3>
				<a href="" class="btnCv">CV</a>
				<a href="" class="btnFolio">PORTFOLIO</a>
			</div>
			
	</div>
		
</div>

<?php get_footer() ?>

<!-- = = script pour le hover des apprenants = = -->

<script>
$(document).ready(function(){
    $('.imgApprenant').mouseover(function(){
    	$(this).next().slideDown();
    });  
});
$(document).ready(function(){
    $('.imgApprenant').mouseout(function(){
    	$(this).next().slideUp();
    });  
});
</script>