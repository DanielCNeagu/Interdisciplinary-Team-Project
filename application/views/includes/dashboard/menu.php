<!-- navbar fixed-left by default  -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
	<!-- Change sidebar buttons -->			
	<div class="btn-group" role="group">
		<button type="button" data-class="fixed-left" class="btn btn-secondary">
			Fixed Left
		</button>
		<button type="button" data-class="fixed-top" class="btn btn-secondary">
			Fixed Top
		</button>
		<button type="button" data-class="fixed-right" class="btn btn-secondary">
			Fixed Right
		</button>
	</div>
	<hr><br><br><br>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav" >
            <li class="nav-item" style="margin: auto; width: 170px; " >
                <a class="nav-link" data-class="fixed-top" href="<?php echo base_url(); ?>dashboard" style="font-size: 20px; margin: auto; width: 170px; font-weight: 900;">
                    <i class="icon-material-outline-dashboard"></i> Dashboard
                </a>
            </li>
            <hr>
            <li class="nav-item" style="margin: auto; width: 170px; " >
                <a class="nav-link" data-class="fixed-top" href="<?php echo base_url(); ?>tickets/active" style="font-size: 17px; margin: auto; color: black;">
                    <i><b>Active Tickets</b></i>
                </a>
            </li>
            <li class="nav-item" style="margin: auto; width: 170px; " >
                <a class="nav-link" data-class="fixed-top" href="<?php echo base_url(); ?>tickets/pending" style="font-size: 17px; margin: auto; color: black;">
                    <i><b>New Tickets</b></i>
                </a>
            </li>
            <li class="nav-item" style="margin: auto; width: 170px; " >
                <a class="nav-link" data-class="fixed-top" href="<?php echo base_url(); ?>tickets/index" style="font-size: 17px; margin: auto; color: black;">
                    <i><b>Closed Tickets</b></i>
                </a>
            </li>
        </ul>
        
        <ul class="navbar-nav">
            <?php if($this->session->userdata('user_type') != '2') { ?>
                <hr>
                <li class="nav-item">
                    
                    <a class="nav-link" data-class="fixed-left" href="<?php echo base_url(); ?>faq/update" style=" padding: 4px; margin-left:20px; font-weight: 900; " >                    
                        Database 
                    </a>
                    <a class="nav-link" data-class="fixed-left" href="<?php echo base_url(); ?>faq/add" style=" padding: 4px; margin-left:20px; font-weight: 900; " >                    
                        Create Q&A 
                    </a>                    
                </li>                               
            <?php } ?>
            <li class="nav-item" style="margin: auto; width: 170px; " >
                <a class="nav-link" data-class="fixed-top" href="#" style="font-size: 17px; margin: auto; ">
                </a>
            </li> 
            <hr>         
            <li class="nav-item" style="margin: auto; width: 170px; ">                 
                <!-- User Name / Avatar -->
				<div class="user-details">
					<div class="user-avatar status-online"><img src="<?php echo base_url(); ?>assets/images/user-avatar-small-01.jpg" alt=""></div>
					<div class="user-name">
						<?php echo $this->session->userdata('fname') . " " . $this->session->userdata('lname'); ?> <span style="font-size: 18px; margin: auto; font-weight: 700;"><?php echo ($this->session->userdata('user_type')=='1') ? 'Admin' : 'User'; ?></span>
					</div>
				</div>
            </li>
            <hr>
            <li class="nav-item" style="margin: auto; width: 170px; " >
                <a class="nav-link" data-class="fixed-top" href="<?php echo base_url(); ?>user/index" style="font-size: 17px; margin: auto; color: black;">
                    <i><b>Accounts</b></i>
                </a>
            </li>
            <hr>
            <li class="nav-item" style="margin: auto; width: 170px; " >
                <a class="nav-link" data-class="fixed-right" href="<?php echo base_url(); ?>logout" style="font-size: 20px; margin: auto; color: gray; font-weight: 900;">
                    <i class="icon-material-outline-power-settings-new"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</nav>





        
     

