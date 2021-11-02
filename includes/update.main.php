
<?php require_once 'scripts/db_conn.php' ?>

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container text-white">
				<div class="row">
					<div class="match-form">

						<?php
							$id = $_GET['id'];
							$sql = "SELECT * FROM `main` WHERE id=$id";
							if($result = mysqli_query($db_conn, $sql)){
								if(mysqli_num_rows($result) > 0){

									$row = mysqli_fetch_array($result);
									echo $row['country'];
						?>


									<form action="scripts/update.php" method="post">

										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<span class="form-label">HOME</span>
													<input name="home_team" class="form-control" type="text" autocomplete="on" value="<?php	 echo  $row['home_team']; ?>">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<span class="form-label">AWAY</span>
													<input name="away_team" class="form-control" type="text" value="<?php echo $row['home_team']; ?>">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<span class="form-label">COUNTRY</span>
													<input name="country" class="form-control" type="text">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<span class="form-label">COMPETITION</span>
													<input name="competition" class="form-control" type="text">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<h6 class="small-text">BOTH HALVES TO BE WON BY DIFFERENT TEAMS - YES</h6>
													<input name="bothhalves_yes" class="form-control" type="number" step=".01" id="bothHalvesDiffTeamsYes" name="bothHalvesDiffTeamsYes" min="3.5" max="9" required>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<h6 class="small-text">BOTH HALVES TO BE WON BY DIFFERENT TEAMS - NO</h6>
													<input name="bothhalves_no" class="form-control" type="number" step=".01" id="bothHalvesDiffTeamsNo" name="bothHalvesDiffTeamsNo" min="1" max="2" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<h6 class="small-text"><br>EXACT NUMBER <br></h6>
													<input name="exact_number" class="form-control" type="number" step=".01" id="bothHalvesDiffTeamsYes" name="bothHalvesDiffTeamsYes" min="1" max="2" required>
													<input type="text" name="entrydate" value="<?php echo 'date("Y-m-d H:i:s")';?>" class="">
												</div>
											</div>
										</div>
										<div class="row">
											
											<div class="col align-self-end">
											</div>
											<div class="col-md-3 align-self-end">
												<div class="form-btn">
			
													<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
													
													<button class="submit-btn">Save</button>
			
												</div>
											</div>
										</div>
										<div class="row">
											<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
			
										</div>
									</form>




<?php


								} else{
									echo "No records matching your query were found.";
								}
							} else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_conn);
							}
							
							// Close connection
							mysqli_close($db_conn);

						?>

					</div>
				</div>
			</div>
		</div>
	</div>