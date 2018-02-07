<?php
include ("php/base/header.php");
echo "DealMe - Login";
include ("php/base/preload.php");
include ("php/base/bodystart.php");
include ("php/base/mongo_login.php");

$collection = $connectionstring->dealsUsers->Business_Profile;

$profileInformation = $collection->find();

?>
		<article>
			<section>
				<h1>List of Profiles in Your Area</h1>
				<?php foreach ($profileInformation as $document)
				{ 
				?>
				<div class="wrapper">
					<a href="profilesee.php">
					<div class="first">
						<p><?php echo $document["name"] ?></p>
						<p><?php echo $document["description"] ?></p>
					</div>
					</a>
					<a href=<?php echo "profiledeals.php?profileID=" . strval($document['_id']); ?>>
					<div class="second float_right">
						View Profile's Deals
					</div>
					</a>
				</div>
				<?php }?>
			</section>
		</article>
<?php 
include ("php/base/footer.php");
?>