"use strict";
const head = document.querySelector(".selectHead"),
    body = document.querySelector(".selectBody"),
    lists = document.querySelectorAll("li");

head.addEventListener("click", ()=> {
    if (body.classList.contains("active")) {
        body.classList.remove("active");
    } else  {
        body.classList.add("active");
    }
});
lists.forEach((li) => {
    li.addEventListener("click", () => {
        if (head.textContent == "Выберите дни"){
            head.textContent = li.textContent;
        } else {
            head.textContent += ", " + li.textContent;
        }
        li.remove();
    });
});