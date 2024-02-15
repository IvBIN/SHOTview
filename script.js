"use strict";
const head = document.querySelector(".selectHead"),
    body = document.querySelector(".selectBody"),
    lists = document.querySelectorAll(".dayW"),
    input = document.querySelector(".input_day");


const headG = document.querySelector(".selectHeadGroup"),
    bodyG = document.querySelector(".selectBodyGroup"),
    listsG = document.querySelectorAll(".groupN"),
    inputG = document.querySelector(".input_group");

// const headPre = document.

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


lists.forEach((dayW) => {
    dayW.addEventListener("click", () => {
        if (head.textContent === "Выберите дни"){
            head.textContent = dayW.textContent;
            input.value = dayW.textContent;
        } else {
            head.textContent += ", " + dayW.textContent;
            input.value += ", " + dayW.textContent;
        }
        dayW.remove();

        console.log(head);
    });
});

listsG.forEach((groupN) => {
    groupN.addEventListener("click", () => {
        if (headG.textContent === "Выберите группу"){
            headG.textContent = groupN.textContent;
            inputG.value = groupN.textContent;
        } else {
            headG.textContent += ", " + groupN.textContent;
            inputG.value += ", " + groupN.textContent;
        }
        groupN.remove();

        console.log(groupN);
        console.log(headG);
    });
});