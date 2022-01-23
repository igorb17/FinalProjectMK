<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php 
                $getGta = $pd->latestFromGta();
                if ($getGta) {
                    while ($result = $getGta->fetch_assoc()) {
                        ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Grand Theft Auto 5	</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
<?php
                    }
                } ?>
				<?php 
                $getF1 = $pd->latestFromF1();
                if ($getF1) {
                    while ($result = $getF1->fetch_assoc()) {
                        ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>F1 2021</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
<?php
                    }
                } ?>
			</div>
			<div class="section group">
				<?php 
                $getValve = $pd->latestFromValve();
                if ($getValve) {
                    while ($result = $getValve->fetch_assoc()) {
                        ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Valve</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
<?php
                    }
                } ?>			
				<?php 
                $getHoi4 = $pd->latestFromHoi4();
                if ($getHoi4) {
                    while ($result = $getHoi4->fetch_assoc()) {
                        ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Hearts of Iron IV</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
<?php
                    }
                } ?>
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/csgo.jpg" alt=""/></li>
						<li><img src="images/gta5.png" alt=""/></li>
						<li><img src="images/pubg.jpeg" alt=""/></li>
						<li><img src="images/f1.png" alt=""/></li>
						<li><img src="images/hoi4.png" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>
