<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <style>
    body {
      background-color: #242629;
      min-height: 100vh;
      display: flex;
      align-items: center;
    }
    .signin-container {
      max-width: 420px;
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
    .btn-primary {
      padding: 0.75rem;
      font-weight: 500;
      border-radius: 8px;
    }
    .form-check-label {
      color: #555;
    }
    .text-muted-small {
      font-size: 0.875rem;
    }
  </style>
</head>
<body>
<form action="" method="">

  <div class="signin-container">
    
    <div class="card">
    <div class="card-header">
      <h4 class="mb-0 fw-semibold">Welcome Back</h4>
      <p class="mb-0 text-white-75">Sign in to continue to your account</p>
    </div>

    <div class="card-body">
      <form action="/signin" method="POST">
        
        <div class="mb-4">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="name@example.com" required autofocus>
        </div>

        <div class="mb-4">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="••••••••" required>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
          </div>
          <a href="/forgot-password" class="text-decoration-none small">Forgot password?</a>
        </div>

        <button type="submit" class="btn btn-primary btn-lg w-100">Sign In</button>
      </form>

      <div class="text-center mt-4 text-muted-small">
        Don't have an account? <a href="/signup" class="text-primary text-decoration-none">Create one</a>
      </div>
    </div>
  </div>
  
</div>
</form>

</body>
</html>