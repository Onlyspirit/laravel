<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <style>
    body {
      background-color: #151616;
      min-height: 100vh;
      display: flex;
      align-items: center;
    }
    .signup-container {
      max-width: 460px;
      width: 100%;
      margin: auto;
    }
    .card {
      border: none;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      overflow: hidden;
    }
    .card-header {
      background: linear-gradient(90deg, #0d6efd, #0b5ed7);
      color: white;
      text-align: center;
      padding: 2.25rem 1.5rem;
      border-bottom: none;
    }
    .card-body {
      padding: 2.5rem 2.25rem;
    }
    .form-label {
      font-weight: 500;
      color: #444;
    }
    .btn-success {
      padding: 0.75rem;
      font-weight: 500;
      border-radius: 8px;
    }
    .form-check-label {
      color: #555;
      font-size: 0.95rem;
    }
    .text-muted-small {
      font-size: 0.875rem;
    }
    </style>
</head>
<body>

  <form action="/register" method="POST">
  <div class="signup-container">
    
  <div class="card">
    <div class="card-header">
      <h4 class="mb-0 fw-semibold">Create Account</h4>
      <p class="mb-0 text-white-75">Join us and get started today</p>
    </div>

    <div class="card-body">
      <form action="/signup" method="POST">
        @csrf
        <div class="mb-4">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="John Doe" required autofocus>
        </div>

        <div class="mb-4">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="name@example.com" required>
          <div id="emailHelp" class="form-text text-muted mt-1">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-4">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="••••••••" required>
        </div>

        <div class="mb-4">
          <label for="password_confirmation" class="form-label">Confirm Password</label>
          <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
          <label class="form-check-label" for="terms">
            I agree to the <a href="/terms" class="text-decoration-none">Terms of Service</a> and 
            <a href="/privacy" class="text-decoration-none">Privacy Policy</a>
          </label>
        </div>

        <button type="submit" class="btn btn-primary btn-lg w-100">Create Account</button>
      </form>

      <div class="text-center mt-4 text-muted-small">
        Already have an account? <a href="/signin" class="text-success text-decoration-none fw-medium">Sign in</a>
      </div>
    </div>
  </div>

</div>

</form>
</body>
</html>