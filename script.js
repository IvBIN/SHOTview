"use strict";
const head = document.querySelector(".selectHead"),
    body = document.querySelector(".selectBody"),
    lists = document.querySelectorAll("li");

const headG = document.querySelector(".selectHeadGroup"),
    bodyG = document.querySelector(".selectBodyGroup"),
    listsG = document.querySelectorAll(".groupN");

console.log(listsG);
head.addEventListener("click", ()=> {
    if (body.classList.contains("active")) {
        body.classList.remove("active");
    } else  {
        body.classList.add("active");
    }
});

headG.addEventListener("click", ()=> {
    if (bodyG.classList.contains("active")) {
        bodyG.classList.remove("active");
    } else  {
        bodyG.classList.add("active");
    }
});


lists.forEach((li) => {
    li.addEventListener("click", () => {
        if (head.textContent === "Выберите дни"){
            head.textContent = li.textContent;
        } else {
            head.textContent += ", " + li.textContent;
        }
        li.remove();

        console.log(head);
    });
});

listsG.forEach((groupN) => {
    groupN.addEventListener("click", () => {
        if (headG.textContent === "Выберите группу"){
            headG.textContent = groupN.textContent;
        } else {
            headG.textContent += ", " + groupN.textContent;
        }
        groupN.remove();

        console.log(groupN);
        console.log(headG);
    });
});