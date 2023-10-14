// JavaScript code for lazy loading
// Select the element you want to lazy load
const target = document.querySelector('.embed-responsive.embed-responsive-16by9');

// Create an observer instance
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // Load the content or trigger an action
      // (e.g., load an image, start a video, etc.)
      entry.target.classList.remove('embed-responsive', 'embed-responsive-16by9'); // Optionally, remove the lazy class
      observer.unobserve(entry.target); // Stop observing once loaded
    }
  });
});

// Start observing the target element
observer.observe(target);

// JavaScript code for your YouTube shorts carousel
$(document).ready(function () {
  $('.yt-shorts-carousel').slick({
    slidesToShow: 6,   // Number of slides to show at once
    slidesToScroll: 3, // Number of slides to scroll at a time
    infinite: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 1200, // Adjust the breakpoint as needed
        settings: {
          slidesToShow: 4,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 992, // Adjust the breakpoint as needed
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 768, // Adjust the breakpoint as needed
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });
});
