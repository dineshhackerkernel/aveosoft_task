<html>
<head>
<title>Email</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
	.email-details-bg{
		padding:40px;
	}
	.logo-bg{
		padding-top: 40px;        
	}
	.email-desc{
		margin-top: 40px;
        font-size: 21px;
	}
	.email-link-text{
		font-weight: 600;
	    font-size: 21px;
	    margin-top: 30px;
	}
	.email-link{
		font-size: 19px;
		margin-bottom: 30px;
	}
	.order-details{
		background-color:#d6d6d6;
	}
	.order-d span{
		font-weight: 600;
		font-size: 17px;
	}
	.if-text{
		font-weight: 600;
	}
	.s-text{
		font-weight: 600;
	}
	.order-d{
        margin-top:30px;
	}
	

	@media (max-width: 768px){
		.email-details-bg {
		    padding: 5px;
		}
	}
	
</style>
</head>
<body>
	<div class="container">
		<div class="email-details-bg">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12 col-12">
					<p class="email-desc">User Detail: -</p>
				</div>
				<div class="col-md-12 col-lg-12 col-sm-12 col-12 order-d">
					<p>Name         :   {{$data['name']}}</p>
					<p>Subject      :   {{$data['subject']}}</p>
					<p>Email        :   {{$data['email']}}</p>
					<p>Message      :   {{$data['message']}}</p>
				</div>
			</div>
	    </div>
	</div>
</body>
</html>