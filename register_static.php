<?php include "header.php"; ?>

    <!-- Register Section -->
    <div class="login-portal reg-portal">
        <div class="login-container reg-container">
            <div class="login-heading">Create an Account</div>
            <form class="login-form" action="#" method="post">
                <div class="login-form-group  reg-form-group">
                    <label class="login-form-label">Full Name</label>
                    <input type="text" class="login-form-input" name="fullname" required>
                </div>
                <div class="login-form-group reg-form-group">
                    <label class="login-form-label">Email</label>
                    <input type="email" class="login-form-input" name="email" required>
                </div>
                <div class="login-form-group reg-form-group">
                    <label class="login-form-label">Username</label>
                    <input type="text" class="login-form-input" name="username" required>
                </div>
                <div class="login-form-group reg-form-group">
                    <label class="login-form-label">Password</label>
                    <input type="password" class="login-form-input" name="password" required>
                </div>
                <div class="login-form-group reg-form-group">
                    <label class="login-form-label">Confirm Password</label>
                    <input type="password" class="login-form-input" name="confirm_password" required>
                </div>
                <div class="login-form-group reg-form-group">
                    <label class="login-form-label">Gender</label>
                    <select class="login-form-input" name="gender" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="login-form-group reg-form-group">
                    <label class="login-form-label">Date of Birth</label>
                    <input type="date" class="login-form-input" name="date_of_birth" required>
                </div>
                <button type="submit" class="login-form-button">Register</button>
            </form>
            <div class="login-as">
                Already have an account? <a href="login.html">Log in here</a>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

    <?php include "footer.php" ?>