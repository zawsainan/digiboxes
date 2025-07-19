// document.addEventListener("DOMContentLoaded", function () {
//   var counterOne = document.getElementById("counter1");
//   var duration = 2000;
//   var currentNumber = 0;
//   var targetNumber = 180;
//   var increment = targetNumber / (duration / 30);
//   var animateCounter = () => {
//     if (currentNumber < targetNumber) {
//       currentNumber += increment;
//       counterOne.textContent = Math.floor(currentNumber) + "+";
//     } else {
//       currentNumber = targetNumber;
//       counterOne.textContent = currentNumber + "+";
//     }
//   };
//   setInterval(animateCounter, 20);
// });
document.addEventListener("DOMContentLoaded", function () {
  const counterOne = document.getElementById("counter1");
  const counterTwo = document.getElementById("counter2");
  const counterThree = document.getElementById("counter3");

  function animateCounter(element, targetNumber, postfix) {
    let currentNumber = 0;
    let duration = 2000;
    let increment = targetNumber / (duration / 30);
    let interval = setInterval(() => {
      if (currentNumber < targetNumber) {
        currentNumber += increment;
        element.textContent = Math.floor(currentNumber) + postfix;
      } else {
        element.textContent = targetNumber + postfix;
        clearInterval(interval);
      }
    }, 30);
  }
  animateCounter(counterOne, 180, "+");
  animateCounter(counterTwo, 35, "+");
  animateCounter(counterThree, 2, "k+");
});
