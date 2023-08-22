function _class(name)
{
    return document.getElementsByClassName(name);
}

let tabPanes = _class("tab-headerv")[0].getElementsByTagName("div");
for(let i=0;i<tabPanes.length;i++)
{
    tabPanes[i].addEventListener("click",function(){
        _class("tab-headerv")[0].getElementsByClassName("active")[0].classList.remove("active");
        tabPanes[i].classList.add("active");

        _class("tab-indicatorv")[0].style.top= `calc(80px + ${i*50}px))`;

        _class("tab-conetntv")[0].getElementsByClassName("active")[0].classList.remove("active");
        _class("tab-conetntv")[0].getElementsByTagName("div")[i].classList.add("active");

    });
}