<?php session_start(); if($_SESSION['usr_nm']=="DEMO"){header("location:login.php");}?>				
				<div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title no-link last"><span class="nobr">Action</span></th>
							<th class="column-title">Name</th>
							<th class="column-title">Image</th>
							<th class="column-title">Description</th>
							<th class="column-title">Enable</th>
                          </tr>
                        </thead>
							<tbody>
								<?php
									include("../conn.php");
									$query="SELECT * FROM `module`";
										if(isset($_GET['q']) && $_GET['q']!=""){
										$query.=" where name LIKE '%".$_GET['q']."%' or id LIKE '%".$_GET['q']."%'";}
										$result=mysql_query($query);
											while($row=mysql_fetch_array($result)){
								?>
							<tr class="even pointer">
								<td class=" last">
									<form onsubmit="return confirm('Do you really want to Delete the module?');" action="" method="POST"><input type="hidden" name="delete" value="<?php echo $row['id']?>"><input  class="btn btn-fail" type="submit"  value="Delete"></form>
									<form action="" method="POST"><input type="hidden" name="edit" value="<?php echo $row['id']?>"><input  class="btn btn-fail" type="submit" value="Edit"></form>
								</td>
								<td class=" "><?php echo $row['name']?></td>
								<td class=" "><img src="../webimages/modules/<?php echo $row['id']?>.jpg" style="width:150px;height:80px;"></td>
								<td class=" "><?php echo $row['description']?></td>
								<td class=" "><?php echo $row['enable']?></td>
							</tr>
							<?php }?>
						</tbody>
					</div>