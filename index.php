<?php include('includes/header.php'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
        <?php include('includes/flash.php'); //flash...?>
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-sign-in-alt me-2"></i>User Login</h4>
                </div>
                <div class="card-body">
                    <form action="actions/login.php" method="GET">
                        <!-- Email Field -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-envelope me-2"></i>Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Enter your email" required name="email">
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-lock me-2"></i>Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Enter password" required name="password">
                                <button class="btn btn-outline-secondary toggle-pwd" type="button">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember">
                                    <i class="fas fa-check-circle me-1"></i>Remember me
                                </label>
                            </div>
                            <a href="#" class="text-decoration-none">
                                <i class="fas fa-key me-1"></i>Forgot password?
                            </a>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-sign-in-alt me-2"></i>Login
                            </button>
                        </div>

                        <!-- Register Link -->
                        <div class="mt-3 text-center">
                            <p class="mb-0">Don't have an account?
                                <a href="#" class="text-decoration-none">
                                    <i class="fas fa-user-plus me-1"></i>Register
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>