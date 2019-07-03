var A = document.querySelector(".navbar-top #navbar-grid a");

if ( A.hasAttribute("target")) {
    console.log(A.getAttribute("target"));
} else {
    A.setAttribute("target","_blank");
}

console.log( A.attributes);