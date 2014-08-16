<?php
$active_link= $this->uri->segment(1, "dashboard");

if($content=="Vehicles" || $this->userVehicle=="MOPHS"){			?>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
               <!--<a href="#">-->
              <button class="btn btn-small btn-success">
                  <i class="icon-signal"></i>
              </button><!--</a>-->

                <button class="btn btn-small btn-info">
                    <i class="icon-pencil"></i>
                </button>

                <button class="btn btn-small btn-warning">
                    <i class="icon-group"></i>
                </button>

                <button class="btn btn-small btn-danger">
                    <i class="icon-cogs"></i>
                </button>
                
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!--#sidebar-shortcuts-->

        <ul class="nav nav-list">
            <li class="<?php echo ($active_link==="dashboard")?"active":"";?>">
                <a href="<?php echo base_url()?>">
                    <i class="icon-dashboard"></i>
                    <span class="menu-text"> Dashboard </span>
               </a>
            </li>
            <?php #if($affiliation !="KEBS" || $affiliation !="MOPHS" ){
            switch($this->userVehicle){
				case "MOPHS":
					$this->load->view('assets/menus/dashboard_menu');
                    $this->load->view('assets/menus/all_menus');
					$this->load->view('assets/menus/oversite_menu');
                    break;
				case "N/A":
					$this->load->view('assets/menus/dashboard_menu');
                    $this->load->view('assets/menus/all_menus');
                    break;	
                case "Oil":
					$this->load->view('assets/menus/my_company');
                    $this->load->view('assets/menus/oil_menu');						
					$this->load->view('assets/menus/dbdata');		
                    break;
                case "Sugar":
					$this->load->view('assets/menus/my_company');
                    $this->load->view('assets/menus/sugar_menu');
                    break;
                case "Maize":
					$this->load->view('assets/menus/my_company');
                    $this->load->view('assets/menus/maize_menu');						
					$this->load->view('assets/menus/dbdata');		
                    break;
                case "Wheat":
					$this->load->view('assets/menus/my_company');
                    $this->load->view('assets/menus/wheat_menu');						
					$this->load->view('assets/menus/dbdata');	
                    break;
                case "Salt":
					$this->load->view('assets/menus/my_company');
                    $this->load->view('assets/menus/salt_menu');
                    break;
				 case "GAIN":
					$this->load->view('assets/menus/my_company_os');
                    $this->load->view('assets/menus/gain_menu');
                    break;
				 case "KEBS":
					$this->load->view('assets/menus/my_company_os');
                    $this->load->view('assets/menus/kebs_menu');
                    break;
				 case "NATIONAL PUBLIC HEALTH LABORATORY SERVICES":
					$this->load->view('assets/menus/my_company_os');
                    $this->load->view('assets/menus/n_l_menu');	
                    break;	
				 case "CONSUMER ORGANIZATION":
					$this->load->view('assets/menus/my_company_os');
                    $this->load->view('assets/menus/c_o_menu');
                    break;			
               
            }
            ?>


        </ul><!--/.nav-list-->

        <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="icon-double-angle-left"></i>
        </div>
    </div>
    <!--End sidebar-->
<?php } ?>