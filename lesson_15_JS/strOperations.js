let text1 = 'Hello,';
let text2 = ' world!!!';

console.log(text1 + text2) ;

/////////////////////////////////////////////////////////////////////

let seconds = 60;
let minutes = 60;
let hours = 24;
let week = 7;
let mounth = 30;

let secondsInHour = seconds * minutes;
let secondsOneDay = secondsInHour * hours;
let secondsInWeek = secondsOneDay * week;
let secondsInMounth = secondsOneDay * mounth;

console.log(secondsInHour + ' seconds in one hour!');
console.log(secondsOneDay + ' seconds in one day!');
console.log(secondsInWeek + ' seconds in one week!');
console.log(secondsInMounth + ' seconds in one mounth!');

//////////////////////////////////////////////////////////////////

let num = 1;
num += 12;
num -= 14;
num *= 5;
num /= 7;
num++;
num--;

//////////////////////////////////////////////////////////////////////
let hour = 16;
let minute = 37;
let sec = 41;

console.log(`${hour} : ${minute} : ${sec} time now!!!`);

///////////////////////////////////////////////////////////////////////

let text = 'I ';
text += 'want ';
text += 'know ';
text += 'JS!!!';

console.log(text);