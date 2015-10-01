<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="?action=default">THE GAME</a>
		</div>
		<!-- /.navbar-header -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if(!ISSET($_SESSION["online"]))
                            {
                        ?>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#login-modal">Se connecter</a>
                            </li>
                        <?php
                            }
                            if(ISSET($_SESSION["online"]))
                            {
                        ?> 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compte <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="?action=deconnection" >Se déconnecter</a>
                                    </li>
                                </ul>
                            </li>
                        <?php
                            }
                        ?>
                    </ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>
<!-- /.navigation -->

<div class="modal fade in" id="login-modal" role="dialog">
	<div class="modal-dialog">
		<div class="loginmodal-container">
			<h1>Connectez-vous à votre compte</h1><br>
			<form action="?action=connection" method="POST" class="form-signin" role="form">
				<input type="email" name="email" placeholder="Email" required autofocus>
				<input type="password" name="password" placeholder="Password" required>
				<input type="submit" name="login" class="btn btn-black btn-xl" value="Se connecter">
			</form>
			<div class="login-help">
				<a href="#" data-toggle="modal" data-target="#register-modal" data-dismiss="modal">Register</a> - <a href="#" data-toggle="modal" data-target="#reset-modal" data-dismiss="modal">Forgot Password</a>
			</div>
		</div>
	</div>
</div>
<div class="modal fade in" id="register-modal">
	<div class="modal-dialog">
		<div class="registermodal-container">
			<h1>Créer votre compte</h1>
			<form action="?action=inscription" method="POST" class="form-signin" role="form">
				<div class="form-group">
					<input type="email" name="email" placeholder="Email" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="Password" required >
					<input type="password" name="confirmPassword" placeholder="Confirm Password" required>
				</div>
				<input type="submit" name="inscription" class="btn btn-success btn-xl" value="Inscription">
			</form>
		</div>
	</div>
</div>
<div class="modal fade in" id="reset-modal" role="dialog">
	<div class="modal-dialog">
		<div class="loginmodal-container">
			<h1>Entrez votre adresse courriel pour </h1><br>
			<form action="?action=passwordForgot" method="POST" class="form-signin" role="form">
				<div class="form-group">
					<input type="email" name="email" placeholder="Email" required autofocus>
				</div>
				<input type="submit" name="login" class="btn btn-black btn-xl" value="Envoyer">
			</form>
		</div>
	</div>
</div>

	
