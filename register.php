<?php include('includes/header.php'); ?>
<div class="container mt-5">
    <div class="row justify-content-center"> 
        <div class="col-md-6">
        <?php include('includes/flash.php'); //flash...?>
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4><i class="fas fa-user-plus me-2"></i>Registration Form</h4>
                </div>
                <div class="card-body">
                    <form action="actions/register.php" method="POST">
                        <!-- Name Field -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-user me-2"></i>Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Enter your name" required name="name">
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-envelope me-2"></i>Email</label>
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
                                <input type="password" class="form-control" placeholder="Create password" required name="password">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-lock me-2"></i>Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Confirm password" required name="confirm_password">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Date of Birth Field -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-calendar-alt me-2"></i>Date of Birth</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                <input type="date" class="form-control" required name="dob">
                            </div>
                        </div>

                        <!-- Gender Field -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-venus-mars me-2"></i>Gender</label>
                            <div>
                            <div class="form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="other">
                                    <label class="form-check-label" for="other"><i class="fas fa-male me-1"></i>
                                        male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female">
                                    <label class="form-check-label" for="female"><i class="fas fa-female me-1"></i>
                                        Female</label>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-user-plus me-2"></i>Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>