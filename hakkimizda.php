<?php include'header.php'; ?>


<?php 

$ayarsor1=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id =:id");
$ayarsor1->execute(array('id' => 0));

$ayarcek1=$ayarsor1->fetch(PDO::FETCH_ASSOC);
 
?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bigtitle">Hakkımızda</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">Tanıtım Video</div>
				</div>

				<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $ayarcek1['hakkimizda_video']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<div class="title-bg">
					<div class="title"><?php echo $ayarcek1['hakkimizda_baslik']; ?></div>
				</div>
				<div class="page-content">
					<p>
						<?php echo $ayarcek1['hakkimizda_icerik']; ?>
					</p>
				</div>

				<div class="title-bg">
					<div class="title">Vizyon</div>
				</div>
				<blockquote><?php  echo $ayarcek1['hakkimizda_vizyon']; ?></blockquote>

				<div class="title-bg">
					<div class="title">Misyon</div>
				</div>
				<blockquote><?php  echo $ayarcek1['hakkimizda_misyon']; ?></blockquote>
			</div>
			<?php include'side-bar.php'; ?>
		</div>
		<div class="spacer"></div>
	</div>
	
	<?php include'footer.php'; ?>