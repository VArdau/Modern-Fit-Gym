<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('../css/contact.css')); ?>">
    <title>Contact</title>
</head>
<body>
  <!--<header>
    <nav>
      <img class="navbar-logo" src="../Images/logo.png" height="100px" width="100px"/>
      <h2>Modern FIT Gym Home Page</h2>
      <a href="/">Home</a>
      <a href="/login">Login</a>
      <a href="/contact">Contact</a>
    </nav>
  </header> -->
  
    <?php $__env->startSection('content'); ?>
  <main>
    <div>
      <h1>Contact Us</h1>
      <p>You can contact us through the following methods:</p>
      <p>Phone Number: 10101010010101</p>
      <p>Email: Example123@gmail.com</p>
      <p>or through the contact form below</p>
    </div>
    <form action="send_email.php" method="post">
      <fieldset>
        <legend>Contact Us Form</legend>
        <div>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter your name" required/>
        </div>
        <br>
        <div>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your email" required/>
        </div>
        <br>
        <div>
          <label for="message">Message</label>
          <textarea name="message" id="message" rows="5" placeholder="Enter your message"></textarea>
        </div>
        <br>
        <div>
          <button class="sendbttn" type="submit" >Send</button>
        </div>
      </fieldset>
    </form>
   
  </main>
  <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\noora\OneDrive\Desktop\LARAVEL\Modern-Fit-Gym\Modern-Fit-Gym-Laravel\resources\views/contact.blade.php ENDPATH**/ ?>