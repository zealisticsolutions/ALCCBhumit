<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
				<ul class="nav nav-list">
					<li class="">
						<a href="?controller=AuraAdmin&action=Dashboard">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<?php if(!empty($_SESSION["USER_TYPE"]) AND ($_SESSION["USER_TYPE"] == 1 || $_SESSION["USER_TYPE"] == 6 || $_SESSION["USER_TYPE"] == 7)) { ?>
					<li class="<?php if(!empty($_GET["controller"]) And ($_GET["controller"] == 'Settings' or $_GET["controller"] == 'Settings')){echo "open";} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cog bigger-130"></i>
							<span class="menu-text">
								Settings
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
						
							<li class="">
								<a href="?controller=Settings&action=Language">
									<i class="menu-icon fa fa-caret-right"></i>
								Language
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="?controller=Settings&action=MedicalHistory">
									<i class="menu-icon fa fa-caret-right"></i>
									Medical History Master
								</a>

								<b class="arrow"></b>
							</li>
                            <?php if(!empty($_SESSION["USER_TYPE"]) AND ($_SESSION["USER_TYPE"] != 6)) { ?>
							<li class="">
								<a href="?controller=Settings&action=medicalRoom">
									<i class="menu-icon fa fa-caret-right"></i>
									Medical Room
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=Settings&action=serviceType">
									<i class="menu-icon fa fa-caret-right"></i>
									Service Type
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=Settings&action=emailTemplateType">
									<i class="menu-icon fa fa-caret-right"></i>
									Email Template Type
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=Settings&action=smsTemplateType">
									<i class="menu-icon fa fa-caret-right"></i>
									SMS Template Type
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=Settings&action=consentFormType">
									<i class="menu-icon fa fa-caret-right"></i>
									Consent Form Type
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=Settings&action=promoCode">
									<i class="menu-icon fa fa-caret-right"></i>
									Promo Code
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=Campaign&action=newPatient">
									<i class="menu-icon fa fa-caret-right"></i>
									Run a Campaign
								</a>
								<b class="arrow"></b>
							</li>
							<?php } ?>
						</ul>
					</li>
					
					<li class="<?php if(!empty($_GET["controller"]) And ($_GET["controller"] == 'AuraService')){echo "open";} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text"> Service </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="?controller=AuraService&action=addService">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Service
								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="?controller=AuraService&action=listService">
									<i class="menu-icon fa fa-caret-right"></i>
									List Service
							</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=AuraService&action=addCService">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Consultation Services
							</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=AuraService&action=listCService">
									<i class="menu-icon fa fa-caret-right"></i>
									List Consultation Service
							</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="<?php if(!empty($_GET["controller"]) And ($_GET["controller"] == 'EmailTemplates' or $_GET["controller"] == 'EmailTemplates')){echo "open";} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-envelope"></i>
							<span class="menu-text"> Email Templates </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="?controller=EmailTemplates&action=add">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Templates
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=EmailTemplates&action=listEt">
									<i class="menu-icon fa fa-caret-right"></i>
									List Templates
							</a>
							<!--<li class="">
								<a href="?controller=EmailTemplates&action=emailConstant">
									<i class="menu-icon fa fa-caret-right"></i>
									Email Constant
							</a>-->
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="<?php if(!empty($_GET["controller"]) And ($_GET["controller"] == 'SMSTemplates' or $_GET["controller"] == 'SMSTemplates')){echo "open";} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-mobile"></i>
							<span class="menu-text"> SMS Templates </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="?controller=SMSTemplates&action=add">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Templates
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=SMSTemplates&action=listSt">
									<i class="menu-icon fa fa-caret-right"></i>
									List Templates
							</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<?php } ?>
					
					<?php if(!empty($_SESSION["USER_TYPE"]) AND $_SESSION["USER_TYPE"] != 6) { ?>
					<li class="<?php if(!empty($_GET["controller"]) And ($_GET["controller"] == 'User' or $_GET["controller"] == 'User')){echo "open";} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text"> Users </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<?php //if(!empty($_SESSION["USER_TYPE"]) And $_SESSION["USER_TYPE"] == 1){ ?>
							<?php if(!empty($_SESSION["USER_TYPE"]) AND $_SESSION["USER_TYPE"] != 5){ ?>
							<li class="">
								<a href="?controller=User&action=registration">
									<i class="menu-icon fa fa-caret-right"></i>
									Add
								</a>

								<b class="arrow"></b>
							</li>
							<?php } ?>
							<?php if(!empty($_SESSION["USER_TYPE"]) And $_SESSION["USER_TYPE"] == 1){ ?>
							<li class="">
								<a href="?controller=User&action=Administrators">
									<i class="menu-icon fa fa-caret-right"></i>
									Administrators
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=User&action=Doctors">
									<i class="menu-icon fa fa-caret-right"></i>
									Doctors
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=User&action=therepist">
									<i class="menu-icon fa fa-caret-right"></i>
									Therapists
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=User&action=Receptionists">
									<i class="menu-icon fa fa-caret-right"></i>
									Receptionists
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=User&action=Managers">
									<i class="menu-icon fa fa-caret-right"></i>
									Managers
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=User&action=counsellor">
									<i class="menu-icon fa fa-caret-right"></i>
									Counsellors
								</a>
								<b class="arrow"></b>
							</li>
							<?php } ?>
							<li class="">
								<a href="?controller=User&action=newPatient">
									<i class="menu-icon fa fa-caret-right"></i>
									Patients
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=User&action=guestPatient">
									<i class="menu-icon fa fa-caret-right"></i>
									Guest Patients
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<?php } ?>
					
					<?php if(!empty($_SESSION["USER_TYPE"]) And in_array($_SESSION["USER_TYPE"], $consent_form) or $_SESSION["USER_TYPE"] == 6 or $_SESSION["USER_TYPE"] == 7 ){ ?>
					<li class="<?php if(!empty($_GET["controller"]) And ($_GET["controller"] == 'ConsentForm' or $_GET["controller"] == 'ConsentForm')){echo "open";} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-mobile"></i>
							<span class="menu-text"> Consent Form </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="?controller=ConsentForm&action=add">
									<i class="menu-icon fa fa-caret-right"></i>
									Consent Form
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>
					<?php } ?>
					<?php if(!empty($_SESSION["USER_TYPE"]) And $_SESSION["USER_TYPE"] == 2 or $_SESSION["USER_TYPE"] == 5 or $_SESSION["USER_TYPE"] == 6 or $_SESSION["USER_TYPE"] == 7 ){ ?>
					<li class="<?php if(!empty($_GET["controller"]) And ($_GET["controller"] == 'Doctor' or $_GET["controller"] == 'Doctor')){echo "open";} ?>">
						<a href="?controller=Doctor&action=myExpertise&edit=<?php if(!empty($_SESSION["USER_ID"])){ echo $_SESSION["USER_ID"]; }?>">
							<i class="menu-icon fa fa-stethoscope"></i>
							<span class="menu-text"> My Specialties </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php if(!empty($_GET["controller"]) And ($_GET["controller"] == 'MySchedule' or $_GET["controller"] == 'MySchedule')){echo "open";} ?>">
						<a href="?controller=MySchedule&action=index&edit=<?php if(!empty($_SESSION["USER_ID"])){ echo $_SESSION["USER_ID"]; }?>">
							<i class="menu-icon fa fa-clock-o"></i>
							<span class="menu-text"> My Schedule </span>
						</a>

						<b class="arrow"></b>
					</li>
					<?php } ?>
					<?php if(!empty($_SESSION["USER_TYPE"]) And (($_SESSION["USER_TYPE"] == 4) OR ($_SESSION["USER_TYPE"] == 1) OR ($_SESSION["USER_TYPE"] == 6) OR ($_SESSION["USER_TYPE"] == 7))){ ?>
					
					<li class="<?php if(!empty($_GET["controller"]) And ($_GET["controller"] == 'Receptionists' or $_GET["controller"] == 'Receptionists')){echo "open";} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text"> Appointments </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<?php //if(!empty($_SESSION["USER_TYPE"]) And $_SESSION["USER_TYPE"] == 1){ ?>
							<li class="">
								<a href="?controller=Receptionists&action=bookAppinments">
									<i class="menu-icon fa fa-caret-right"></i>
									Book Appointments
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=Receptionists&action=bookings">
									<i class="menu-icon fa fa-caret-right"></i>
									Booking Calender
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=Receptionists&action=listBooking">
									<i class="menu-icon fa fa-caret-right"></i>
									Listing View
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="?controller=Receptionists&action=bookRoutineAppinments">
									<i class="menu-icon fa fa-caret-right"></i>
									Book Routine Appointments
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<?php } ?>
					<?php if(!empty($_SESSION["USER_TYPE"]) And $_SESSION["USER_TYPE"] == 2 or $_SESSION["USER_TYPE"] == 5){ ?>
					
					<li class="<?php if(!empty($_GET["controller"]) And ($_GET["controller"] == 'Receptionists' AND $_GET["action"] != 'feedback')){echo "open";} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">Appointments </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="?controller=Receptionists&action=listBooking">
									<i class="menu-icon fa fa-caret-right"></i>
									My Appointments
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<?php } ?>
					<?php if(!empty($_SESSION["USER_TYPE"]) And $_SESSION["USER_TYPE"] == 1 or $_SESSION["USER_TYPE"] == 4 or $_SESSION["USER_TYPE"] == 6 or $_SESSION["USER_TYPE"] == 7){ ?>
					<li class="<?php if(!empty($_GET["controller"]) And ($_GET["controller"] == 'Receptionists' AND $_GET["action"] == 'feedback')){echo "open";} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">Feedback </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="?controller=Receptionists&action=feedback">
									<i class="menu-icon fa fa-caret-right"></i>
									Feedback Form
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="?controller=Receptionists&action=listFeedback">
									<i class="menu-icon fa fa-caret-right"></i>
									Feedback List
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<?php } ?>
				</ul><!-- /.nav-list -->

				<!--<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>-->
			</div>