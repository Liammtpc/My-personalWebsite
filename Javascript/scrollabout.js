window.addEventListener("scroll", () => {
    const connectionCards = document.querySelectorAll(".connectionCard");
    const target = window.innerHeight * 0.5;
    for (let connectionCard of connectionCards) {
      const serviceTop = connectionCard.getBoundingClientRect().top;
      if (serviceTop < target) {
        connectionCard.classList.add("shows2");
      }
    }
  });