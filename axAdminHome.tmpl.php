<div id="main-wrapper">
                    <!-- Row -->
                    <div class="row">
                    
                    <div class="col-md-8">
           <?php
				if($_SESSION["AXADMINTYPE"]==1 || $_SESSION["AXADMINTYPE"]==0){
			  
			  ?> 	
           <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axLeadsList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/leads.jpg"/>
                                        
                                    
                                    <p>Leads</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>   
            <?php
				}
			?>  
            
             <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axCustomerList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/customer.jpg"/>
                                        
                                    
                                    <p>Customers</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>     
            
             <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axOrderList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/orders.jpg"/>
                                        
                                    
                                    <p>Orders</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>               
            
            
            <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axOrderLeadsList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/agentorders.jpg"/>
                                        
                                    
                                    <p>Agent Orders</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>             
            
             <?php
				if($_SESSION["AXADMINTYPE"]==1 || $_SESSION["AXADMINTYPE"]==0){
			  
			  ?>
            
            <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axProductList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/product.jpg"/>
                                        
                                    
                                    <p>Products</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>             
            
            <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axDiscountList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/discount.jpg"/>
                                        
                                    
                                    <p>Discounts</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>       
            
             <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axRegionList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/destination.jpg"/>
                                        
                                    
                                    <p>Regions</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>     
            
             <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axCityList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/city.jpg"/>
                                        
                                    
                                    <p>City</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>     
            
             <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axPointOfSaleList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/pointofsale.jpg"/>
                                        
                                    
                                    <p>Point of Sales</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>           
            <?php
				}
			?>
            
             <?php
				if($_SESSION["AXADMINTYPE"]==1){
			  
			  ?>
                  
                        
           <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axAdminUserList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/staffs.jpg"/>
                                        
                                    
                                    <p>Admin Users</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            
            <?php
				}
			?>
            
             <?php
				if($_SESSION["AXADMINTYPE"]==1 || $_SESSION["AXADMINTYPE"]==0){
			  
			  ?>
            
            <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axPromoterList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/promoter.jpg"/>
                                        
                                    
                                    <p>Promoter</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            
            <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axPromoterSupervisorList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/supervisor.jpg"/>
                                        
                                    
                                    <p>Supervisor</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            
             <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axCallCenterOperatorList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/operator.jpg"/>
                                        
                                    
                                    <p>Call Center Operators</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            
             <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axCallCenterManagerList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/manager.jpg"/>
                                        
                                    
                                    <p>Call Center Managers </p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            
             <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axSalesAgentList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/salesagents.jpg"/>
                                        
                                    
                                    <p>Sales Agents</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            
             <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        
                          <div class="live-tile cd-nav" >
                              <div class="dashboard-boxes">
                                  <a href="<?php echo $includePath?>admin/axServiceExecutiveList.php">
                                  
                                   <img src="<?php echo $includePath?>dashboard_images/serviceexecutive.jpg"/>
                                        
                                    
                                    <p>Service Executives</p>
                                   </a>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            
            <?php
				}
			?>
            
             <?php
				if($_SESSION["AXADMINTYPE"]==1){
			  
			  ?>
                        
           <div class=" col-md-4">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                      <div class="live-tile cd-nav" >
                          <div class="dashboard-boxes">
                              <a href="<?php echo $includePath?>admin/axSettingsList.php">
                               
                                <img src="<?php echo $includePath?>dashboard_images/settings.jpg"/>
                                <p>Settings</p>
                               </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
				}
			?>
           
           
           <div class="col-md-4">
				<div class="panel info-box panel-white">
					<div class="panel-body">
					  <div class="live-tile cd-nav" >
						  <div class="dashboard-boxes">
							  <a href="<?php echo $includePath?>admin/axChangePassword.php">
							
								<img src="<?php echo $includePath?>dashboard_images/change-password.png"/>
								<p>Change Password</p>
							   </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
		
			<div class="col-md-4">
				<div class="panel info-box panel-white">
					<div class="panel-body">
					  <div class="live-tile cd-nav" >
						  <div class="dashboard-boxes">
							  <a href="<?php echo $includePath?>admin/axLogout.php">
							  
								<img src="<?php echo $includePath?>dashboard_images/logout.png"/>
								<p>Log out</p>
							   </a>
							</div>
						</div>
					</div>
				</div>
			</div>
                            
                        
                   		</div>
                    
                    
                    
                    
                    
                        <div class="col-md-4">
                            <div class="panel panel-white">
                                <div class="row">
                                     <div class="col-sm-1"></div>
                                    <div class="col-sm-10">
                                        <div class="stats-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Activities</h4>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="list-unstyled">
                                                    <li><b>Lead nuovi</b><div class="text-success pull-right"><b><?php echo count($arrNewLeads);?></b></div></li>
                                                    <li><b>Lead contattati</b><div class="text-success pull-right"><b><?php echo count($arrContact);?></b></div></li>
                                                    <li><b>Lead da richiamare</b><div class="text-success pull-right"><b><?php echo count($arrCallLater);?></b></div></li>
                                                    <li><b>Lead rifiutati</b><div class="text-success pull-right"><b><?php echo count($arrRejected);?></b></div></li>
                                                    <li><b>Lead da eliminare</b><div class="text-success pull-right"><b><?php echo count($arrDeleted);?></b></div></li>
                                                    <li><b>Appuntamenti confermati</b><div class="text-success pull-right"><b><?php echo count($arrConfirmed);?></b></div></li>
                                                    <li><b>Appuntamenti assegnanti ad Agenti</b><div class="text-success pull-right"><b><?php echo count($arrAssigned);?></b></div></li>
                                                    <li><b>Ordini chiusi</b><div class="text-success pull-right"><b><?php echo count($arrClosed);?></b></div></li>
                                                    <li><b>Ordini pagati</b><div class="text-success pull-right"><b><?php echo count($arrPaid);?></b></div></li>
                                                     <li><b>Clienti</b><div class="text-success pull-right"><b><?php echo count($arrCustomer);?></b></div></li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-sm-1"></div>
                                </div>
                            </div>
                            
                            <!-- end-->
                            
                            <!-- </div>
                        
                        <div class="col-md-6">-->
                            
                            
                            <div class="panel panel-white">
                                <div class="row">
                                     <div class="col-sm-1"></div>
                                    <div class="col-sm-10">
                                        <div class="stats-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Team</h4>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="list-unstyled">
                                                     <li>
                                                         <b>Promoters</b>
                                                         <div class="text-success pull-right">
                                                            <a href="<?php echo $includePath?>admin/axPromoterList.php" target="_blank">
                                                            	<b><?php echo count($arrPromoter);?></b>
                                                            </a>
                                                         </div>
                                                     </li>
                                                    <li>
                                                        <b>Promoter Supervisor</b>
                                                        <div class="text-success pull-right">
                                                            <a href="<?php echo $includePath?>admin/axPromoterSupervisorList.php" target="_blank" >
                                                           		 <b><?php echo count($arrSupervisor);?></b>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <b>Call Center Operator</b>
                                                        <div class="text-success pull-right">
                                                        <a href="<?php echo $includePath?>admin/axCallCenterOperatorList.php" target="_blank">
                                                        <b><?php echo count($arrOperator);?></b>
                                                        </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                    <b>Call Center Manager</b>
                                                    <div class="text-success pull-right">
                                                    <a href="<?php echo $includePath?>admin/axCallCenterManagerList.php" target="_blank">
                                                    <b><?php echo count($arrManager);?></b>
                                                    </a>
                                                    </div>
                                                    </li>
                                                    <li>
                                                    <b>Sales Agents</b>
                                                    <div class="text-success pull-right">
                                                    <a href="<?php echo $includePath?>admin/axSalesAgentList.php" target="_blank">
                                                    <b><?php echo count($arrAgent);?></b>
                                                    </a>
                                                    </div>
                                                    </li>
                                                    
                                                     <?php
														if($_SESSION["AXADMINTYPE"]==1){
													  
													  ?>
                                                    
                                                    <li>
                                                    <b>Admin users</b>
                                                    <div class="text-success pull-right">
                                                    <a href="<?php echo $includePath?>admin/axAdminUserList.php?type=0" target="_blank" >
                                                    <b><?php echo count($arrAdminUser);?></b>
                                                    </a>
                                                    </div>
                                                    </li>
                                                    <li><b>Accounting users</b>
                                                    <div class="text-success pull-right">
                                                     <a href="<?php echo $includePath?>admin/axAdminUserList.php?type=2" target="_blank" >
                                                    <b><?php echo count($arrAccountingUser);?></b>
                                                    </a>
                                                    </div>
                                                    </li>
                                                    
													<?php
                                                        }
                                                    ?>
                                                
                                                </ul>
                                            </div>
                                            
                                          
                                           
                                        </div>
                                    </div>
                                     <div class="col-sm-1"></div>
                                     
                                </div>
                            </div>
                            
                            
                            
                        </div>
                        
                        
                </div>