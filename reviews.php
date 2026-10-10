<?php
// Sets the page title to 'Reviews | FocusFlow'
$pageTitle = 'Reviews';
require_once 'includes/header.php';
?>

<main>
  <h1 class="page-title">User Reviews</h1>

  <section class="card" aria-labelledby="reviews-heading">
    <h2 id="reviews-heading" style="margin-bottom:1rem; color:#1e1b4b;">What users are saying</h2>

    <!-- reviews.js targets this div and fills it with the loaded reviews -->
    <div id="reviews-container" aria-live="polite">
      <!-- Replaced by the actual reviews once they load -->
      <p class="loading">Loading reviews...</p>
    </div>
  </section>
</main>

<!-- reviews.js fetches and displays the reviews -->
<script src="js/reviews.js"></script>

<?php require_once 'includes/footer.php'; ?>
