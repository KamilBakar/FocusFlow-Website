<?php
// Sets the page title before loading the header so the tab displays 'Study Tips | FocusFlow'
$pageTitle = 'Study Tips';
require_once 'includes/header.php';
?>

<main>
  <h1 class="page-title">How to Study Effectively</h1>

  <!-- Each study tip is its own article — article is the right element for
       self-contained content that could stand alone -->

  <article class="card info-section" aria-labelledby="todo-heading">
    <h2 id="todo-heading">&#128203; Using To-Do Lists</h2>
    <p>
      A well-maintained to-do list is one of the most effective tools a student can use.
      Writing tasks down frees up mental energy, reduces anxiety, and gives you a clear
      picture of what needs to be done.
    </p>
    <p>
      The key is to keep tasks specific and achievable. Instead of writing "study maths",
      write "complete exercises 3.1 to 3.5 from chapter 3". Specific tasks are easier to start
      and easier to complete.
    </p>
    <!-- Quick visual tips in a grid — easier to scan than a paragraph -->
    <div class="tip-grid">
      <div class="tip-item">Break large tasks into smaller steps</div>
      <div class="tip-item">Prioritise by deadline and importance</div>
      <div class="tip-item">Review your list at the start of each day</div>
      <div class="tip-item">Tick off completed tasks for motivation</div>
    </div>
  </article>

  <article class="card info-section" aria-labelledby="journal-heading">
    <h2 id="journal-heading">&#128214; Keeping a Reflective Journal</h2>
    <p>
      Reflective journalling helps you process what you have learned, identify gaps in your
      understanding, and track your personal growth over time. Many students find that writing
      about their studies improves retention and deepens understanding.
    </p>
    <p>
      You do not need to write for long — even five minutes at the end of a study session can
      be valuable. Focus on what you learned, what confused you, and what you would do differently.
    </p>
    <div class="tip-grid">
      <div class="tip-item">Write after every study session</div>
      <div class="tip-item">Be honest about what you did not understand</div>
      <div class="tip-item">Note questions to follow up on later</div>
      <div class="tip-item">Review past entries to track progress</div>
    </div>
  </article>

  <article class="card info-section" aria-labelledby="timer-heading">
    <h2 id="timer-heading">&#9201; Using a Timer (Pomodoro Technique)</h2>
    <p>
      The Pomodoro Technique is a time management method developed by Francesco Cirillo.
      It involves working in focused 25-minute intervals — called Pomodoros — separated by
      short 5-minute breaks. After four Pomodoros you take a longer break of 15 to 20 minutes.
    </p>
    <p>
      This approach is effective because it trains your brain to focus for defined periods,
      prevents burnout, and makes large tasks feel more manageable by breaking them into
      timed chunks.
    </p>
    <div class="tip-grid">
      <div class="tip-item">Remove distractions before starting a session</div>
      <div class="tip-item">Use breaks to rest — not to check social media</div>
      <div class="tip-item">Track how many Pomodoros a task takes</div>
      <div class="tip-item">Stop working when the timer ends</div>
    </div>
  </article>
</main>

<?php require_once 'includes/footer.php'; ?>