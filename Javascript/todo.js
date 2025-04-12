const lists = document.querySelectorAll("#list");
const checks = document.querySelectorAll("#hide");

lists.forEach((list, i) => {
  list.addEventListener("click", () => {
    console.log(i); 
    list.style.backgroundColor = " #82bace";
    list.style.color = "#fff";
    checks.forEach((check, iList) => {
      if (i === iList) {
        check.style.visibility = "visible";
      } 
    });
  });
});
