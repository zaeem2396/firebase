<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<title>Firebase</title>
</head>

<body>
	<form class="container mt-5 col-md-4" action="<?= base_url('Firebase/uploadFile') ?>" method="post" enctype="multipart/form-data">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control" name="email" required>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" class="form-control" name="password" required>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Image</label>
			<input type="file" class="form-control" name="img" required>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>

</html>