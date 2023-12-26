const humburger = document.querySelector(".humburger");
const humburgerLine1 = document.querySelector(".humburgerLine1");
const humburgerLine2 = document.querySelector(".humburgerLine2");
const humburgerLine3 = document.querySelector(".humburgerLine3");
const navList = document.querySelector(".navList");
const navLink = document.querySelectorAll(".navLink");

humburger.addEventListener("click", () => {
  navList.classList.toggle("top-[-800px]");
  navList.classList.toggle("top-20");
  humburgerLine1.classList.toggle("w-[25px]");
  humburgerLine2.classList.toggle("w-[15px]");
  humburgerLine3.classList.toggle("w-[30px]");

  humburgerLine1.classList.toggle("w-[30px]");
  humburgerLine2.classList.toggle("w-[25px]");
  humburgerLine3.classList.toggle("w-[15px]");
});

for (let i = 0; i < navLink.length; i++) {
  navLink[i].addEventListener("click", () => {
    navList.classList.remove("top-20");
    navList.classList.add("top-[-800px]");
  });
}
