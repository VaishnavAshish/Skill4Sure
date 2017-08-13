<?php session_start(); if($_SESSION['usr_nm']=="DEMO"){header("location:login.php");}?>				
				<div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Name</th>
							<th class="column-title">Email</th>
							<th class="column-title">Phone</th>
							<th class="column-title">Gender</th>
							<th class="column-title">Profession</th>
                          </tr>
                        </thead>
							<tbody>
								<?php
									include("../conn.php");
									$query="SELECT * FROM `users`";
										if(isset($_GET['q']) && $_GET['q']!=""){
										$query.=" where name LIKE '%".$_GET['q']."%' or email LIKE '%".$_GET['q']."%' or profession LIKE '%".$_GET['q']."%'";}
										$result=mysql_query($query);
											while($row=mysql_fetch_array($result)){
								?>
							<tr class="even pointer">
								
								<td class=" "><?php echo $row['name']?></td>
								<td class=" "><?php echo $row['email']?></td>
								<td class=" "><?php echo $row['phone']?></td>
								<td class=" "><?php echo $row['gender']?></td>
								<td class=" "><?php echo $row['profession']?></td>
							</tr>
							<?php }?>
						</tbody>
					</div>