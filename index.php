<?php
/**
 * Ryzoria SMP - Main Index File
 * PHP Website Entry Point
 */

require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Ryzoria SMP - Premium Minecraft survival server with modern features and an amazing community. Join now!" />
  <meta name="theme-color" content="#0a0e27" />
  <title><?php echo $page_title; ?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/ranks.css" />
  <link rel="stylesheet" href="css/animation.css" />
  <link rel="stylesheet" href="css/responsive.css" />

  <!-- Scroll to Top Button CSS -->
  <style>
    #scrollTopBtn {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary) 0%, var(--accent-dark) 100%);
      color: var(--background);
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 999;
      box-shadow: 0 8px 20px rgba(97, 225, 255, 0.3);
    }

    #scrollTopBtn:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 25px rgba(97, 225, 255, 0.4);
    }

    @media (max-width: 480px) {
      #scrollTopBtn {
        width: 45px;
        height: 45px;
        bottom: 20px;
        right: 20px;
        font-size: 1.25rem;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Main Content -->
  <main>
    <?php
    // Load the appropriate page
    $page_file = 'pages/' . $current_page . '.php';

    if (file_exists($page_file)) {
      include $page_file;
    } else {
      // Default to home if page not found
      include 'pages/home.php';
    }
    ?>
  </main>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <!-- Scroll to Top Button -->
  <button id="scrollTopBtn" title="Go to top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- JavaScript Files -->
  <script src="js/smooth-scroll.js"></script>
  <script src="js/navbar.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
