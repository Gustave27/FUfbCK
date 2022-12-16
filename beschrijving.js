function calcHeight(value) {
    let numberOfLineBreaks = (value.match(/\n/g) || []).length;
    // min-height + lines x line-height + padding + border
    let newHeight = 10 + numberOfLineBreaks * 30 + 20;
    return newHeight;
  }
  
  let textarea = document.querySelector(".resize-ta");
  textarea.addEventListener("keyup", () => {
    textarea.style.height = calcHeight(textarea.value) + "px";
  });


var x = Math.floor(Math.random()*360)
document.documentElement.style
    .setProperty('--color', x + ", 69%, 30%");