document.addEventListener("DOMContentLoaded", function () {
  const counterWrapper = document.getElementById("counterWrapper");
  const counterOne = document.getElementById("counter1");
  const counterTwo = document.getElementById("counter2");
  const counterThree = document.getElementById("counter3");

  if (counterWrapper && counterOne && counterTwo && counterThree) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            animateCounter(counterOne, 180, "+");
            animateCounter(counterTwo, 35, "+");
            animateCounter(counterThree, 2, "k+");
            observer.unobserve(counterWrapper);
          }
        });
      },
      { threshold: 0.5 }
    );
    observer.observe(counterWrapper);
  }

  function animateCounter(element, targetNumber, postfix) {
    let currentNumber = 0;
    const duration = 2000;
    const increment = targetNumber / (duration / 30);

    const interval = setInterval(() => {
      if (currentNumber < targetNumber) {
        currentNumber += increment;
        element.textContent = Math.floor(currentNumber) + postfix;
      } else {
        element.textContent = targetNumber + postfix;
        clearInterval(interval);
      }
    }, 30);
  }

  // Owl Carousel
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    autoplayTimeout: 1500,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });
});
