<div class="panel panel-default sidebar-menu">
	<div class="panel-heading"><!--panel-heading Start-->
		<center>
			<img src="customer_images/akul.jpg" class="img-responsive">
		</center>
		<br>
		<h3 align="center" class="panel-title">Name: Akul</h3>
	</div><!--panel-heading End-->

	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
			<li class="<?php if(isset($_GET[my_oder])){echo "active";}?>">
				<a href="my_account.php?my_oder"> <i class="fa fa-list"> My Order</i></a>
			</li>

			<li class="<?php if(isset($_GET[pay_offline])){echo "active";}?>">
				<a href="my_account.php?pay_offline">
					<i class="fa fa-bolt"> Pay Offline </i>
				</a>
			</li>

			<li class="<?php if(isset($_GET[edit_act])){echo "active";}?>">
				<a href="my_account.php?edit_act"> <i class="fa fa-pencil"> Edit Account</i></a>
			</li>
			
			<li class="<?php if(isset($_GET[change_pass])){echo "active";}?>">
				<a href="my_account.php?change_pass">
					<i class="fa fa-user"> Change password </i>
				</a>
			</li>

			<li class="<?php if(isset($_GET[delete_ac])){echo "active";}?>">
				<a href="my_account.php?delete_ac">
					<i class="fa fa-trash-o"> Delete Act </i>
				</a>
			</li>

			<li class="<?php if(isset($_GET[logout])){echo "active";}?>">
				<a href="my_account.php?logout">
					<i class="fa fa-sign-out"> Logout </i>
				</a>
			</li>


		</ul>
	</div>	



</div>