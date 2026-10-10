<?php
// Sets the page title before loading the header so the tab displays 'Home | FocusFlow'
$pageTitle = 'Home';
require_once 'includes/header.php';
?>

<main>
  <!-- Hero section — first thing the user sees, introduces the app and links to it -->
  <section class="card hero" aria-labelledby="hero-heading">
    <div class="hero-text">
      <h2 id="hero-heading">Welcome to FocusFlow</h2>
      <p>
        FocusFlow is a personal productivity web app designed to help students
        stay organised, reflect on their progress, and manage their time effectively.
        It combines a to-do list, a reflective journal, and a Pomodoro timer — all in one place.
      </p>
      <!-- Opens the live app in a new tab — rel="noopener" is a security best practice when using target="_blank" -->
      <a href="https://w22020574.nuwebspace.co.uk/focusflow/" class="btn" target="_blank" rel="noopener">
        Launch FocusFlow App &rarr;
      </a>
    </div>
    <div class="hero-image">
      <img src="images/app-screenshot.png" alt="Screenshot of the FocusFlow app showing the home screen with Todo, Journal, Timer and Messages features" />
    </div>
  </section>

  <!-- Feature cards — one per app feature, gives the user a quick overview -->
  <section aria-labelledby="features-heading">
    <h2 id="features-heading" class="page-title">What FocusFlow Offers</h2>
    <div class="features">
      <article class="feature-card">
        <div class="icon">&#128203;</div>
        <h3>To-Do List</h3>
        <p>Add, edit, complete and delete tasks. Data saved locally so nothing is lost.</p>
      </article>
      <article class="feature-card">
        <div class="icon">&#128214;</div>
        <h3>Journal</h3>
        <p>Write and reflect on your thoughts with a scrollable, timestamped journal.</p>
      </article>
      <article class="feature-card">
        <div class="icon">&#9201;</div>
        <h3>Pomodoro Timer</h3>
        <p>Work sessions, short breaks and long breaks — fully automated cycling.</p>
      </article>
    </div>
  </section>
</main>

<?php require_once 'includes/footer.php'; ?>