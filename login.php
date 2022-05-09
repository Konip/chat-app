<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat</header>
            <form action="#">
                <div class="error-text"> </div>
                <div class="field input">
                    <label for="">Email Address</label>
                    <input type="text" name="email" placeholder="Enter you email">
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Enter new password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">
                Not yet signed up?
                <a href="index.php">
                    Sigup now
                </a>
            </div>
        </section>
    </div>

    <script src="./javascript/pass-show-hide.js"></script>
    <script src="./javascript/login.js"></script>
</body>

</html>