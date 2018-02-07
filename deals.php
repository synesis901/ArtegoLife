<?php
	include("php/tmp/header.php");
	echo "\n\t\tDealMe - Deals";
	include("php/tmp/upper.php");
?>
		<article>
			<section class="options">
				<h2>Type of Deals</h2>
				<div class="box">
					<input type="checkbox" name="student" value="Student">
					<label name="student">Student Deals</label>
				</div>
				<div class="box">
					<input type="checkbox" name="birthday" value="Birthday">
					<label name="student">Birthday Deals</label>
				</div>
			</section>
			<section class="results">
				<p>
					<span class="deal-name">
						Buy 1 Get 1 Free Books!
					</span>
					<span class="deal-store">
						The Book Store
					</span>
					<span class="deal-address">
						123 Bookworm Way
					</span>
					<span class="deal-phone">
						+1 (234) 567 8910
					</span>
					<span class="deal-code">
						ax34K8
						<span class="deal-code-description">
							Use this code in-store to take advantage of this offer!
						</span>
					</span>
				</p>
				<p>
					<span class="deal-name">
						15% OFF ANY PIZZA!
					</span>
					<span class="deal-store">
						Friendly's Pizza Parlour
					</span>
					<span class="deal-address">
						123 4567 ave
					</span>
					<span class="deal-phone">
						+1 (234) 567 8911
					</span>
					<span class="deal-code">
						p1zz45
						<span class="deal-code-description">
							Use this code in-store to take advantage of this offer!
						</span>
					</span>
				</p>
				<p>
					<span class="deal-name">
						Haircut w/FREE Shampoo
					</span>
					<span class="deal-store">
						Ted's Triumphant Salon
					</span>
					<span class="deal-address">
						8484 West st & 45 Oak Blvd.
					</span>
					<span class="deal-phone">
						+1 (234) 567 8912
					</span>
					<span class="deal-code">
						ctH41R
						<span class="deal-code-description">
							Use this code in-store to take advantage of this offer!
						</span>
					</span>
				</p>
			</section>
			<section class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d303373.55196987593!2d-113.4939486!3d53.55587745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a0224580deff23%3A0x411fa00c4af6155d!2sEdmonton%2C+AB!5e0!3m2!1sen!2sca!4v1400628837524" width="100%" height="100%" frameborder="1" style="border:0;"></iframe>
			</section>
		</article>
<?php 
	include("php/tmp/footer.php");
?>