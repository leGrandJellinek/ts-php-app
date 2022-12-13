const mainDate = document.querySelector(".main__welcome-date");
const conTime = document.querySelector(".main__consumption-time");
const incTime = document.querySelector(".main__income-time");
if (mainDate) {
    mainDate.innerHTML = `Сегодня: ${new Date().toLocaleDateString()}`
}

var currencyMask = IMask(
    document.querySelector(".currency-mask"),
    {
      mask: 'num',
      blocks: {
        num: {
          mask: Number,
          thousandsSeparator: ' '
        }
      }
});

if(conTime){
  conTime.value = new Date().toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
}
if(incTime){
  incTime.value = new Date().toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
}
