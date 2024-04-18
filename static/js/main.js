function openNav() {
    document.getElementById("nav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("nav").style.width = "0";
  }

  // accordian Menu 
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}


// data toggle for the accounts page
// data toggle for the accounts page


// data toggle for the accounts page
const tabs = document.querySelectorAll('.toggle');
const panel = document.querySelectorAll('.panel');

tabs.forEach((tab) => {
  tab.addEventListener('click', () => {
    const target = tab.dataset.target;
    panel.forEach((item) => {
      if (item.classList.contains(target)) {
        item.classList.add('active');
      } else {
        item.classList.remove('active');
      }
    });
  });
});