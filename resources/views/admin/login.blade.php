<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin Login</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets')}}/admin/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets')}}/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{asset('assets')}}/admin/assets/css/style.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">
        <center>
            <form role="form"  method="post"  action="{{route('loginadmincheck')}}" enctype="multipart/form-data" >
                @csrf
                <p>
                <h3>Admin Login</h3><br>
                <label>Email<br>
                    <input type="email" name="email"  style='width: 200px;' required>
                </label>
                </p>
                <p>
                    <label>Passwords <br>
                        <input type="password" name="password" style='width: 200px;'  >
                    </label>
                </p>
                <p><button type="login" class="btn btn-success">Login Admin</button></p>
                <div class="registration">
                    Don't have an account yet?<br/>
                    <a class="" href="/registeruser">
                        Create an account
                    </a>
                </div>
            </form>
        </center>
    </div>
</div>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('assets')}}/js/jquery.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>





</body>











