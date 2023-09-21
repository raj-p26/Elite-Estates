<?php
  error_reporting(E_ALL ^ E_WARNING);
  // session_start();
  $name = null;
  if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
  }
?>

<header>
  <a href="#" class="logo">logo</a>
  <div class="navigation">
    <ul class="menu">
      <div class="close-btn">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="close-icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </div>
      <li class="menu-item"><a class="link" href="http://localhost:90/raj/el-est-resp/jqAjax-test/">Home</a></li>
      <li class="menu-item">
        <a class="sub-btn link" href="#contact">ContactUs</a>
      </li>
      <li class="menu-item"><a class="link" href="#about">About</a></li>
      <li class="menu-item user-form">
        <button class="link"><?php echo $name !== null ? $name : 'login'; ?></button>
        <div class="dropdown-menu">
        <?php if (!isset($_SESSION['username'])) : ?>
          <h3 class="form-heading">WELCOME USER</h3>
          <form action="signup.php" method="post" class="form signup-form active">
            <div class="input-box">
              <input type="text" name="firstname" id="firstname" required>
              <label for="firstname">First Name</label>
            </div>
            <div class="input-box">
              <input type="text" name="lastname" id="lastname" required>
              <label for="lastname">Last Name</label>
            </div>
            <div class="input-box">
              <input type="email" name="email" id="email" required>
              <label for="email">Email</label>
            </div>
            <div class="input-box">
              <input type="password" name="password" id="password" required>
              <label for="password">Password</label>
            </div>
            <button type="submit" class="form-btn">SignUp</button>
          </form>

          <button class="form-swap-btn form-btn">Login?</button>

          <form action="login.php" method="post" class="form login-form">
            <div class="input-box">
              <input type="email" name="email" id="email" required>
              <label for="email">Email</label>
            </div>
            <div class="input-box">
              <input type="password" name="password" id="password" required>
              <label for="password">Password</label>
            </div>
            <button type="submit" class="form-btn">Login</button>
          </form>
          <?php else : ?>
            <a class="logout-link" href="#">Logout</a><br />
            <a class="delete-account-link" href="#">Delete Account</a>
          <?php endif; ?>
        </div>
      </li>
    </ul>
  </div>
  <div class="menu-btn">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="menu-btn-icon">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg>
  </div>
</header>