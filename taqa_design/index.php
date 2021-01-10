<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Solution Integration admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Solution Integration" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="assets/images/fevicon.png"> -->

        <!-- C3 Chart css -->
        <link href="assets/libs/c3.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
         
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
		   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
.loginleft {
    background: transparent linear-gradient(224deg, rgb(36 100 145 / 0.4) 0%, rgb(59 201 131 / 0.24) 100%) 0% 0% no-repeat padding-box;
    padding: 3em;
    text-align: center;
    color: #000;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.login-img {
    width: 50%;
    margin: auto;
	    padding-top: 15px;
}

.loginleft h2 {
    font-size: 24px;
    font-weight: 600;
    color: #000;
}
.loginleft p {
    font-size: 18px;
}
.login-div {
    width: 118px;
    margin: auto;
}

.login-logo {
    padding: 1em 3em;
    width: 100%;
}
.login-div {
    width: 118px;
    margin: auto;
}


.form-group {
    margin-bottom: 1rem;
}

.formdiv {
    position: relative;
}

.formdiv i {
    position: absolute;
    top: 16px;
    font-size: 18px;
    left: 15px;
}

.formdiv .form-control {
    padding-left: 45px;
    border-radius: 30px;
    border-color: #00BB5E;
}

.form-login {
    margin-top: 3em;
    background: #00634D;
    padding: 1em;
    border-radius: 12px;
}

.formdiv {
    position: relative;
}

.formdiv i {
    position: absolute;
    top: 16px;
    font-size: 18px;
    left: 15px;
    color: #fff;
}

.formdiv .form-control {
    padding-left: 45px;
    border-radius: 30px;
    border: 2px solid #fff;
    background: transparent;
	color:#fff;
}

.form-login {
    margin-top: 3em;
    padding: 1em;
    border-radius: 12px;

background: #00634d; /* Old browsers */
background: -moz-linear-gradient(left,  #00634d 0%, #00634d 47%, #00634d 47%, #00634d 47%, #00634d 47%, #00634d 47%, #00634d 47%, #00634d 47%, #006b53 47%, #006b53 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  #00634d 0%,#00634d 47%,#00634d 47%,#00634d 47%,#00634d 47%,#00634d 47%,#00634d 47%,#00634d 47%,#006b53 47%,#006b53 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  #00634d 0%,#00634d 47%,#00634d 47%,#00634d 47%,#00634d 47%,#00634d 47%,#00634d 47%,#00634d 47%,#006b53 47%,#006b53 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00634d', endColorstr='#006b53',GradientType=1 ); /* IE6-9 */

}

.rember {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0px 15px;
    font-style: italic;
}

.rember span label {
    margin: 0px;
    color: #fff;
}

.rember span label input[type="checkbox"] {
    position: relative;
    top: 3px;
    width: 15px;
    height: 15px;
    margin-right: 5px;
}

.btn-sendbox {
    margin-top: 3em;
}

.btn-sendbox button {
    box-shadow: 0px 3px 6px #242424;
border-radius: 25px;
    color: #fff;
    border: 0px;
    font-size: 14px;
   
    border-radius: 25px;
    padding: 10px 0px;
	width:185px;
}
.middlebox {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
}
.term {
    margin-top: 3em;
}
.rember a {
    color: #fff;
}
</style>

    </head>
<body style="background:#fff;">
<section>
<div class="loginmiddle">
<div class="row no-gutters">
<div class="col-md-8">

<div class="loginleft">
<div class="full-height">
<h2>All Of Your Marketing In One Place.</h2>
<p>this text can be updated from the admin panel, the image can also be updated from the admin panel, to share news/information with the users of this system</p>
<div class="login-img">
<img src="assets/images/login.png" alt=""/>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="middlebox">
<div class="login-logo">
<div class="login-div">
<img src="assets/images/logo.png" alt=""/>
</div>

<div class="form-login">
<div class="form-group">
<div class="formdiv">
<i class="fa fa-envelope"></i>
<input type="text" class="form-control" placeholder="Email ID" />
</div>
</div>


<div class="form-group">
<div class="formdiv">
<i class="fa fa-lock"></i>
<input type="password" class="form-control" placeholder="Password" />
</div>
</div>

<div class="rember">
<span><label><input type="checkbox"/>Remember me</label></span>
<span><a href="forgot-password.php">Forgot Password?</a></span>
</div>


</div>
<div class="btn-sendbox text-center">
<button class="btn btn-dark" onclick="location.href='dashboard.php'">Login</button>

</div>
<div class="term text-center">Term of use. Privacy policy</div>
</div>


</div>
</div>
</div>
</div>
</section>


</body>
</html>
