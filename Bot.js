// ==UserScript==
// @name         BingBot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  Bot for Bing
// @author       Vladimir Ivanov
// @match        https://www.bing.com/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// ==/UserScript==

let keywords = ["10 самых популярных шрифтов от Google", "Отключение редакций и ревизий в WordPress", "Вывод произвольных типов записей и полей в WordPress", "Взаимодействие PHP и MySQL. Подключение к базе данных MySQL"];
let keyword = keywords[getRandom(0, keywords.length)];
let sb_form_q = document.getElementById("sb_form_q")
let links = document.links;

if(sb_form_go !== undefined) {
  document.getElementById("sb_form_q").value = keyword;
  sb_form_go.click();
} else {

  for (let i = 0; i < links.length; i++) {
    if (links[i].href.indexOf("napli.ru") !== -1) {
      let link = links[i];
      console.log("Нашел строку " + link[i]);
      link.click();
      break;
    }
  }
}


function getRandom(min, max) {
  return Math.floor(Math.random()*(max - min) + min); 
}