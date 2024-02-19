
//Landmark Hover Effect
document.querySelectorAll(".landmark-text > span").onmouseover = function() { 
    alert("test");
}
const elStatus = Array.from(document.querySelectorAll('.status .stat'));
elStatus.forEach(stat => {
  stat.addEventListener('click', () => {
    let vlg = stat.dataset.key;
    if(vlg == slide) {
      console.log('same');
    } else {
      slides[slide].classList.remove("current_video");
      slide=(slide+vlg)%slides.length;
      slides[slide].classList.add("current_video");
      pointer.dataset.current = slide; //change pointer data attribute value with slide
    }
  });
});

//This tag
const HoverPopup = Array.from(document.querySelectorAll('.status .stat'));
const test = {
  prop: 42,
  func: function () {
    return this.prop;
  },
};
let hello = test.func();
console.log(hello);
// Expected output: 42

let hover = document.querySelectorAll('.landmark-text > span');
for (let elem of hover) {
  elem.addEventListener('mouseenter', () => {
    elem.style.backgroundColor = 'red'
  })
  elem.addEventListener('mouseleave', () => {
    elem.style.backgroundColor = ''
  })
};