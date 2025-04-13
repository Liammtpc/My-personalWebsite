const bars=document.querySelector("#bars");
const xMark=document.querySelector("#xMarkspanel");
const sidbar=document.querySelector(".sideBar");
bars.addEventListener("click",()=>{
    sidbar.style.right="0";
})
xMark.addEventListener("click",()=>{
    sidbar.style.right="-1000px";
})