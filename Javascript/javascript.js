window.addEventListener("load", () => {
    const banner = document.querySelector(".banner");
    const bannerRight=document.querySelector(".banner-right");
    const bannerPicture=document.querySelector(".banner-picture");
    const bannerImg=document.querySelector(".banner-picture img");
    banner.style.opacity=1;
    bannerRight.style.right=0;
    bannerRight.style.position= "relative";
    bannerPicture.style.top="-60px";
    bannerImg.style.transform= "scale(1)";
    // const target = window.innerHeight * 0.5;
    //   const bannerTop = banner.getBoundingClientRect().top;
    //   console.log(bannerTop);
    //   console.log(target);
    //   if (bannerTop < target) {
    //     banner.classList.add("show");
    //   }

  });
  const bars=document.querySelector("#bars");
  const menuBar=document.querySelector(".menuBar");
  const xmark=document.querySelector("#xMark");
  bars.addEventListener("click",()=>{
    menuBar.style.display="flex";
  })
  xmark.addEventListener("click",()=>{
    menuBar.style.display="none";
  })