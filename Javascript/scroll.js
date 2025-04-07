window.addEventListener("scroll", () => {
  const serviceSections=document.querySelectorAll(".service-section");
  const target = window.innerHeight * 0.5;
  for (let service of serviceSections) {
    const serviceTop = service.getBoundingClientRect().top;
    if (serviceTop <= target) {
      service.classList.add("shows1");
    }
  }
});
window.addEventListener("scroll", () => {
  const skills = document.querySelectorAll(".skill");
  const target = window.innerHeight * 0.5;
  for (let skill of skills) {
    const serviceTop = skill.getBoundingClientRect().top;
    if (serviceTop <= target) {
      skill.classList.add("shows1");
    }
  }
});
