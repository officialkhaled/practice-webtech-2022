// *Property #1 => innerText* (looks as it is in the browser)
//const para = document.querySelector("p");
//console.log(para.innerText);

// *Property #2 => textContent* (looks exactly like it is in the HTML file)
//const para1 = document.querySelector("p");
//console.log(para1.textContent);

// *Property #3 => innerHTML* (can create HTML elements from within JS files -> this is where DOM is getting more powerful)
// e.g.: 1 =>
//const ul = document.querySelector("ul");
//console.log(ul.innerHTML);

// e.g.: 2 =>
//const ul = document.querySelector("ul");
//ul.innerHTML += "<li>Item 4</li>"; // this will add a new item to the list
//console.log(ul.innerHTML);

// *Method #1 => getAttribute()* (receive the value of a certain attribute)
//const para = document.querySelector("p");
//console.log(para.getAttribute("id"));

// *Method #2 => setAttribute()* (create a new attribute for a certain element)
const para = document.querySelector("p");
para.setAttribute("class", "paragraph"); // (name, value)
console.log(para.getAttribute("id"));
