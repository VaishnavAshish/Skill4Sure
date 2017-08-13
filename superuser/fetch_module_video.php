<?php session_start(); if($_SESSION['usr_nm']=="DEMO"){header("location:login.php");}?>			
			<div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title no-link last"><span class="nobr">Action</span></th>
							<th class="column-title">Video</th>
							<th class="column-title">Name</th>
							<th class="column-title">Module Name</th>
							<th class="column-title">Enable</th>
                          </tr>
                        </thead>
							<tbody>
								<?php
									include("../conn.php");
									$query="SELECT modulevideo.*,module.name as modulename FROM `modulevideo` join `module` ON modulevideo.moduleid=module.id order by moduleid ASC";
										if(isset($_GET['q']) && $_GET['q']!=""){
										$query.=" where name LIKE '%".$_GET['q']."%' or id LIKE '%".$_GET['q']."%'";}
										$result=mysql_query($query);
											while($row=mysql_fetch_array($result)){
								?>
							<tr class="even pointer">
								<td class=" last">
									<form action="" method="POST">
										<input type="hidden" name="delete" value="<?php echo $row['id']?>">
										<input  class="btn btn-fail" type="submit" value="Delete">
									</form>
								</td>
								<td class=" "><?php echo "<iframe height='100px' width='200px'".substr($row['link'], 29);?></td>
								<td class=" "><?php echo $row['name']?></td>
								<td class=" "><?php echo $row['modulename']?></td>
								<td class=" "><?php echo $row['enable']?></td>
							</tr>
							<?php }?>
						</tbody>
					</div>