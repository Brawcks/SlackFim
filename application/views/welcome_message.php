<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Slack FIM</title>
	<script src="https://use.fontawesome.com/0ffcee58c7.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<style media="screen">
/*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
	color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
	color: #333;
	text-shadow: none; /* Prevent inheritance from `body` */
	background-color: #fff;
	border: .05rem solid #fff;
}


/*
 * Base structure
 */

html,
body {
	height: 100%;
	background: url('http://localhost/SlackFim/images/bgaccueil.jpg') no-repeat center center fixed;
	-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.colorwhite {
	color: #fff;
}

body {
	text-align: center;
	text-shadow: 0 .05rem .1rem rgba(0,0,0,.5);
}

/* Extra markup and styles for table-esque vertical and horizontal centering */
.site-wrapper {
	display: table;
	width: 100%;
	height: 100%; /* For at least Firefox */
	min-height: 100%;
	-webkit-box-shadow: inset 0 0 5rem rgba(0,0,0,.5);
					box-shadow: inset 0 0 5rem rgba(0,0,0,.5);
}
.site-wrapper-inner {
	display: table-cell;
	vertical-align: top;
}
.cover-container {
	margin-right: auto;
	margin-left: auto;
}

/* Padding for spacing */
.inner {
	padding: 2rem;
}


/*
 * Header
 */

.masthead {
	margin-bottom: 2rem;
}

.masthead-brand {
	margin-bottom: 0;
}

.nav-masthead .nav-link {
	padding: .25rem 0;
	font-weight: bold;
	color: rgba(255,255,255,.5);
	background-color: transparent;
	border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
	border-bottom-color: rgba(255,255,255,.25);
}

.nav-masthead .nav-link + .nav-link {
	margin-left: 1rem;
}

.nav-masthead .active {
	color: #fff;
	border-bottom-color: #fff;
}

@media (min-width: 48em) {
	.masthead-brand {
		float: left;
	}
	.nav-masthead {
		float: right;
	}
}


/*
 * Cover
 */

.cover {
	padding: 0 1.5rem;
}
.cover .btn-lg {
	padding: .75rem 1.25rem;
	font-weight: bold;
}


/*
 * Footer
 */

.mastfoot {
	color: rgba(255,255,255,.5);
}


/*
 * Affix and center
 */

@media (min-width: 40em) {
	/* Pull out the header and footer */
	.masthead {
		position: fixed;
		top: 0;
	}
	.mastfoot {
		position: fixed;
		bottom: 0;
	}
	/* Start the vertical centering */
	.site-wrapper-inner {
		vertical-align: middle;
	}
	/* Handle the widths */
	.masthead,
	.mastfoot,
	.cover-container {
		width: 100%; /* Must be percentage or pixels for horizontal alignment */
	}
}

@media (min-width: 62em) {
	.masthead,
	.mastfoot,
	.cover-container {
		width: 42rem;
	}
}


h5 {
	color: #212529;
}

</style>

</head>
<body>

	    <div class="site-wrapper">

	      <div class="site-wrapper-inner">

	        <div class="cover-container">

	          <div class="masthead clearfix">
	            <div class="inner">
								<a href="<?php echo base_url() ?>"><h3 class="masthead-brand colorwhite">Slack FIM</h3></a>
	              <nav class="nav nav-masthead">
	                <a class="nav-link active colorwhite" href="<?php echo base_url() ?>">Accueil</a>
	                <a class="nav-link colorwhite" href="#" data-toggle="modal" data-target="#exampleModal" >Connexion</a>
	              </nav>
	            </div>
	          </div>

	          <div class="inner cover">
	            <h1 class="cover-heading colorwhite">Un partage simple et efficace</h1>
	            <p class="lead colorwhite">Partagez vos cours et entrainez-vous ensembles !</p>
	            <p class="lead">
	              <button type="button" name="button" class="btn btn-lg btn-secondary" data-toggle="modal" data-target="#exampleModal">Me connecter</button>
	            </p>
	          </div>

	          <div class="mastfoot">
	            <div class="inner colorwhite">
	              <p>Slack FIM <a href="https://getbootstrap.com">FIM CCI Formations</a>, by <a href="https://twitter.com/mdo">Eh ! Manu !</a>.</p>
	            </div>
	          </div>

	        </div>

	      </div>

	    </div>




			<!-- MODAL -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">

								<div class="input-group">
						      <input type="text" class="form-control" placeholder="Votre pseudo" aria-label="Votre pseudo">
						    </div>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Votre mot de passe" aria-label="Votre mot de passe">
						    </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
			        <button type="button" class="btn btn-primary">Se connecter</button>
			      </div>
			    </div>
			  </div>
			</div>








	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
