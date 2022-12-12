const mainDate = document.querySelector(".main__welcome-date")
const signup = document.querySelector(".signup");
const signUpButton = document.querySelector(".signup__button");
signup.addEventListener("submit", () => {
    console.log(1);
})
signUpButton.addEventListener("click", () => {
    console.log(2);
})
if (mainDate) {
    mainDate.innerHTML = `Сегодня: ${new Date().toLocaleDateString()}`
}


var currencyMask = IMask(
    document.querySelector(".currency-mask"),
    {
      mask: 'num',
      blocks: {
        num: {
          // nested masks are available!
          mask: Number,
          thousandsSeparator: ' '
        }
      }
    });