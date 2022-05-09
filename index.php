<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-text">
                    This is an error message
                </div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label for="">Email Address</label>
                    <input type="text" name="email" placeholder="Enter you email" required>
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label for="">Select Image</label>
                    <input type="file" name="image">
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat" required>
                </div>
            </form>
            <div class="link">
                Already signed up?
                <a href="login.php">
                    Login now
                </a>
            </div>
        </section>
    </div>

    <script src="./javascript/pass-show-hide.js"></script>
    <script src="./javascript/signup.js"></script>

</body>

</html>