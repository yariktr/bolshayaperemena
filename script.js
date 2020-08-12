"use strict";
var i = 0;
var images = [];
var time = 1000;
images[0]="1.jpg";
images[1]="2.jpg";
images[2]="3.jpg";
images[3]="4.jpg";
images[4]="5.jpg";
images[5]="6.jpg";
images[6]="7.jpg";

function slideShow(){
    document.slideshow.src = images[i];
    if (i<images.length - 1){
        i++;
    } else{
        i=0;
    }
    setTimeout("slideShow", time);
}
window.onload = slideShow;

const check1 = document.getElementById("check1"),
           check2 = document.getElementById("check2"),
           check3 = document.getElementById("check3"),
           block1 = document.getElementById("block1"),
           block2 = document.getElementById("block2"),
           block3 = document.getElementById("block3");

           block1.style.display = "none";
           block2.style.display = "none";
           block3.style.display = "none";

           check1.checked = false;
           check2.checked = false;
           check3.checked = false;

      function fun1() {
          check2.checked = false;
          check3.checked = false;

          block1.style.display = "flex";
          block2.style.display = "none";
          block3.style.display = "none";
          
          check1.checked ? false : block1.style.display = "none";
      }

      function fun2() {
          check1.checked = false;
          check3.checked = false;

          block2.style.display = "flex";
          block1.style.display = "none";
          block3.style.display = "none";

          check2.checked ? false : block2.style.display = "none";
      }

      function fun3() {
          check1.checked = false;
          check2.checked = false;

          block3.style.display = "flex";
          block1.style.display = "none";
          block2.style.display = "none";

          check3.checked ? false : block3.style.display = "none";
      }

const nasel = document.getElementById("nasel");
const elek = document.getElementById("elek");
const podgtop = document.getElementById("podgtop");
const mosh = document.getElementById("mosh");
const srzp = document.getElementById("srzp");
const rasoth = document.getElementById("rasoth");
const star = document.getElementById("star");
const invest = document.getElementById("invest");
const dolya = document.getElementById("dolya");
const checka1 = document.getElementById("checka1");
const checka2 = document.getElementById("checka2");
const checka3 = document.getElementById("checka3");
const checka4 = document.getElementById("checka4");
const cena = document.getElementById("cena");
const d2 = document.getElementById("d2");
const shag = document.getElementById("shag");
