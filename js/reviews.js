// reviews.js — ES6+ JavaScript
// Fetches reviews.json and displays grouped by rating (5 star first)

const container = document.getElementById('reviews-container');

// Turns a number into a star display e.g. 3 → ★★★☆☆
const renderStars = (rating) => '★'.repeat(rating) + '☆'.repeat(5 - rating);

// Groups reviews by their rating so they can be displayed in sections
const groupByRating = (reviews) => {
  return reviews.reduce((groups, review) => {
    const rating = review.rating;
    if (!groups[rating]) groups[rating] = [];
    groups[rating].push(review);
    return groups;
  }, {});
};

const renderReviews = (reviews) => {
  container.innerHTML = '';

  const grouped = groupByRating(reviews);

  // Highest rated reviews show first
  const sortedRatings = Object.keys(grouped).sort((a, b) => b - a);

  sortedRatings.forEach((rating) => {
    const group = document.createElement('div');
    group.classList.add('rating-group');

    const heading = document.createElement('h3');
    heading.innerHTML = `<span style="color:#f59e0b">${renderStars(Number(rating))}</span> ${rating} Star${rating == 1 ? '' : 's'}`;
    group.appendChild(heading);

    grouped[rating].forEach((review) => {
      const card = document.createElement('article');
      card.classList.add('review-card');
      card.setAttribute('aria-label', `Review by ${review.name}, rated ${rating} stars`);

      // aria-hidden stops screen readers reading the stars out loud
      // since the rating is already described in the aria-label above
      card.innerHTML = `
        <p class="reviewer-name">${review.name}</p>
        <p class="stars" aria-hidden="true">${renderStars(Number(rating))}</p>
        <p class="review-text">${review.review}</p>
      `;

      group.appendChild(card);
    });

    container.appendChild(group);
  });
};

fetch('reviews.json')
  .then((response) => {
    // Without this check a broken link would silently fail instead of showing an error
    if (!response.ok) throw new Error(`HTTP error: ${response.status}`);
    return response.json();
  })
  .then((data) => {
    if (!data.length) {
      container.innerHTML = '<p class="error-msg">No reviews found.</p>';
      return;
    }
    renderReviews(data);
  })
  .catch((error) => {
    // Shows a message if the file couldn't be loaded or something went wrong
    container.innerHTML = `<p class="error-msg">Failed to load reviews: ${error.message}</p>`;
  });