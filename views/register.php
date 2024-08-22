<main id='register'>
<section id='sec-register'>
<div class="register-wrapper">
    <h2>Registration</h2>
    <form action="/" id='register_form' method="POST" autocomplete='off'>
      <div class="input-box">
        <input type="text" name='full_name' placeholder="Enter your name and surname" required>
      </div>
      <div class="input-box">
        <input type="email" name='email' placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="text" name='username' placeholder="Enter your username" required>
      </div>
      <div class="input-box">
        <input type="password" name='password' placeholder="Create password" required>
      </div>
      <!-- <div class="input-box">
        <input type="password-r" name='' placeholder="Confirm password" required>
      </div> -->
      <div class="policy">
        <input type="checkbox" name=''required>
        <h3>I accept all terms & condition</h3>
      </div>
      <input type="hidden" name="class" value="Auth">
    <input type="hidden" name="method" value='register'>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="/login">Login now</a></h3>
      </div>
    </form>
  </div>
</section>
</main>