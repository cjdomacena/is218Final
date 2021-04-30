<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IS218</title>
</head>
<body>
	  <!-- Form Contents -->
	  <div class="form-body">
                        <h2>Register!</h2>
                        <form method="get" id="my-form" action="">
                            <!-- Name Credentials -->
                            <div class="form-item">
                                <label for="fName" class="test">First Name
                                    <input type="text" placeholder="Enter your First Name" id="fName" required>
                                    <p id="error-fName" class="error"></p>
                                </label>
                                <br>
                                <label for="lName" class="test">Last Name
                                    <input type="text" id="lName" placeholder="Enter your Last Name" required>
                                    <p id="error-lName" class="error"></p>
                                </label>
                            </div>

                            <!-- Email Credentials -->
                            <div class="form-item">
                                <label for="email">Email
                                    <input type="text" placeholder="email@email.com" id="email" required>
                                    <p id="error-email" class="error"></p>
                                </label>
                            </div>

                            <!-- Form buttons -->
                            <div class="form-item buttons">
                                <button type="submit" class="button" value="Send">Sign Up</button>
                                <button type="reset" class="button">Cancel</button>
								<a href="/login/login.php">Login</a>
                            </div>
                        </form>
                    </div>
</body>
</html>