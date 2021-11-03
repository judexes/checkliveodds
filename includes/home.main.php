
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container text-white">
				<div class="row">
					<div class="match-form">
						<form action="scripts/update.php" method="post">
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">HOME</span>
										<input name="home_team" class="form-control" type="text" autocomplete="on" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">AWAY</span>
										<input name="away_team" class="form-control" type="text" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">COUNTRY</span>
										<input name="country" class="form-control" type="text" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">COMPETITION</span>
										<input name="competition" class="form-control" type="text" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
                                        <h6 class="small-text">BOTH HALVES TO BE WON BY DIFFERENT TEAMS - YES</h6>
										<input name="bothhalves_yes" class="form-control" type="number" step=".01" max="9" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
                                        <h6 class="small-text">BOTH HALVES TO BE WON BY DIFFERENT TEAMS - NO</h6>
										<input name="bothhalves_no" class="form-control" type="number" step=".01"  min="1" max="2" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<h6 class="small-text"><br>EXACT NUMBER <br></h6>
										<input name="exact_number" class="form-control" type="number" step=".01" id="bothHalvesDiffTeamsYes" name="bothHalvesDiffTeamsYes" min="1" max="2" value="<?php echo $row['exact_number']; ?>" required>
										<input type="text" name="entrydate" value="<?php echo 'date("Y-m-d H:i:s")';?>" class="" hidden>
									</div>
								</div>
                            </div>
							<div class="row">
                                
                                <div class="col align-self-end">
                                </div>
								<div class="col-md-3 align-self-end">
									<div class="form-btn">

										<input type="hidden" name="id" value="<?php echo $id; ?>"/>
										
										<button class="submit-btn">Save</button>

									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>