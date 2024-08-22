<main id='register'>
<section id='sec-register'>
<div class="register-wrapper">
    <h2>Login</h2>
    <form action="/" id='login_form' method="POST" autocomplete='off'>
      <div class="input-box">
        <input type="text" name='email' placeholder="Enter your email or username" required>
      </div>

      <div class="input-box">
        <input type="password" name='password' placeholder="Enter your password" required>
      </div>
      <!-- <div class="input-box">
        <input type="password-r" name='' placeholder="Confirm password" required>
      </div> -->
      <input type="hidden" name="class" value="Auth">
    <input type="hidden" name="method" value='login'>
      <div class="input-box button">
        <input type="Submit" value="Login">
      </div>
      <div class="text">
        <h3>Don't have an account? <a href="/register">Register now</a></h3>
      </div>
    </form>
  </div>
</section>
</main>