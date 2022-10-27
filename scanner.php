<html>

<head>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.je"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/us/2.1.10/vue.min.js"></script>
	<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builde/master/inetancan.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
	<body style="background: url(VNHSBG1.jpg); background-size: 100%"></body>
		<div class = "container">
			<div class = "row">
				<div class = "col-md-8">
					<br><br><br><br><br><br>
					<br><br><br><br><br><br>
					<br>	
				<center><video id ="preview" width ="50%"></video></center>
				<div>
					<br>
					<br>	
				<center><div class = "col-md-8"></center>
					<br>
				<label> SCAN EMPLOYEE ID</label>
				<input type="text" name="text" id="text" readonly= "" placeholder="Scan ID " class= "form-control">
					<br>
					<br>
					<center><a href="index.php">CLICK TO INPUT ID</a></center>
				</div>
			</div>
		</div>

		<script>
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                alert('No cameras found');
            }

        }).catch(function(e) {
            console.error(e);
        });

        scanner.addListener('scan', function(c) {
            document.getElementById('employee_qrcode').value = c;
            document.forms[0].submit();
        });
    </script>

	</body>
	
</html>