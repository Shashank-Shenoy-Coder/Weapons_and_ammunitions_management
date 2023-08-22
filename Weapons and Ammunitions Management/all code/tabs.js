let tabs = document.querySelector(".tabs");
let tabHeader = tabs.querySelector(".tab-header");
//let tabHeader2 = tabs.querySelector(".tab-header2");
let tabBody = tabs.querySelector(".tab-body");
let tabIndicator = tabs.querySelector(".tab-indicator");
let tabHeaderNodes = tabs.querySelectorAll(".tab-header > div");
//let tabHeaderNodes2 = tabs.querySelectorAll(".tab-header2 > div");
let tabBodyNodes = tabs.querySelectorAll(".tab-body > div");

for(let i=0;i<tabHeaderNodes.length;i++)
{
    tabHeaderNodes[i].addEventListener("click",function(){
        tabHeader.querySelector(".active").classList.remove("active");
        tabHeaderNodes[i].classList.add("active");
        tabBody.querySelector(".active").classList.remove("active");
        tabBodyNodes[i].classList.add("active");
        tabIndicator.style.left = `calc(calc(calc( 25% - 5px) * ${i}) + 10px)`;
    });
}