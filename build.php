<?php
/**
 * Build Script - Generate static HTML from PHP
 * This script compiles all PHP pages into static HTML
 */

// Create public directory
if (!is_dir('public')) {
  mkdir('public', 0755, true);
}

// Include configuration
require_once 'includes/config.php';

// Pages to build
$pages_to_build = ['home', 'server', 'ranks', 'community'];

// Function to capture page output
function generatePageHTML($page_name)
{
  global $current_page, $pages;

  // Set the current page
  $current_page = $page_name;

  // Start output buffering
  ob_start();

  // Include the main template
  include 'index.php';

  // Get the output
  $html = ob_get_clean();

  return $html;
}

// Build each page
foreach ($pages_to_build as $page) {
  echo "Building page: $page...\n";

  // Generate HTML
  $html = generatePageHTML($page);

  // Create filename
  if ($page === 'home') {
    $filename = 'public/index.html';
  } else {
    @mkdir('public', 0755, true);
    $filename = 'public/' . $page . '.html';
  }

  // Write to file
  file_put_contents($filename, $html);
  echo "✓ Created: $filename\n";
}

// Copy assets
echo "\nCopying assets...\n";

// Create css directory
@mkdir('public/css', 0755, true);
$cssFiles = glob('css/*.css');
foreach ($cssFiles as $file) {
  $dest = 'public/' . $file;
  copy($file, $dest);
  echo "✓ Copied CSS: $file\n";
}

// Create js directory
@mkdir('public/js', 0755, true);
$jsFiles = glob('js/*.js');
foreach ($jsFiles as $file) {
  $dest = 'public/' . $file;
  copy($file, $dest);
  echo "✓ Copied JS: $file\n";
}

// Copy assets if they exist
if (is_dir('assets')) {
  @mkdir('public/assets', 0755, true);
  $files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator('assets'),
    RecursiveIteratorIterator::SELF_FIRST
  );

  foreach ($files as $file) {
    if ($file->isDir()) {
      @mkdir('public/' . $file->getPathname(), 0755, true);
    } else {
      copy($file->getPathname(), 'public/' . $file->getPathname());
    }
  }
  echo "✓ Copied assets\n";
}

// Create .htaccess for public folder
$htaccess = <<<'HTACCESS'
<IfModule mod_rewrite.c>
  RewriteEngine On
  RewriteBase /

  # Redirect to HTML files
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule ^([a-zA-Z0-9/_-]*)$ $1.html [QSA,L]

  # Security headers
  Header set X-Content-Type-Options "nosniff"
  Header set Referrer-Policy "strict-origin-when-cross-origin"
  Header set Strict-Transport-Security "max-age=63072000"
</IfModule>
HTACCESS;

file_put_contents('public/.htaccess', $htaccess);
echo "✓ Created .htaccess\n";

echo "\n✓ Build completed successfully!\n";
