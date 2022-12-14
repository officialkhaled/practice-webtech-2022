// *DOM => Document Object Model => link the JS object to the HTML Doc*

// Selecting Methods => Getting HTML Elements by their Class

//const heading = document.getElementsByClassName("title");
//console.log(heading);

// *Selecting Methods => Getting HTML Elements by their ID*

//let dogImg = document.getElementById("dog-img");

// *Selecting Methods => querySelectorAll => It selects all the elements that share that selector*
//let dogTrait = document.querySelectorAll(".item");
//console.log(dogTrait);

// *Selecting Methods => querySelector => It selects only one element that has the selector*
let dogTrait = document.querySelector("#dog-img"); // CSS selector inside the ()
console.log(dogTrait);
