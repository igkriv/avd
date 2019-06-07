var header = document.querySelector('header');
var section = document.querySelector('section');

// keep URL as variable
var requestURL = 'https://localhost/xerox.json';

//new sample of object
var request = new XMLHttpRequest();

//open object
request.open('GET', requestURL);

request.responseType = 'json';
request.send();

request.onload = function() {
  var xerox = request.response;
  populateHeader(superHeroes);
  showHeroes(superHeroes);
}





// var word = "deRed";

// function isPalindrome(word)
// {
//   let string = word
//         .toLowerCase() 
//         .split("")
//         .reverse()
//         .join("");
//         const newLocal = word.toLowerCase();
//         // alert(string + "  " + newLocal);
//     return string === newLocal;
// }

// // alert(isPalindrome(word));
// // console.log(isPalindrome(word));

// if (isPalindrome(word) == 1) {
//   new Vue({
//     el: '#app',
//     data: {
//       message: "Да, это палиндром!"
//     }
//   });
// }
