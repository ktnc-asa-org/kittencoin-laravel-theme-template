/*! For license information please see new-age.js.LICENSE.txt */
window.addEventListener("DOMContentLoaded",(function(e){document.body.querySelector("#mainNav")&&new bootstrap.ScrollSpy(document.body,{target:"#mainNav",offset:74});var n=document.body.querySelector(".navbar-toggler");[].slice.call(document.querySelectorAll("#navbarResponsive .nav-link")).map((function(e){e.addEventListener("click",(function(){"none"!==window.getComputedStyle(n).display&&n.click()}))}))}));