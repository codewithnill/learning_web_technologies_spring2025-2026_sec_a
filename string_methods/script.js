const str = "Hello World";

// 1. String length
console.log(str.length);

// 2. String charAt()
console.log(str.charAt(0));
console.log(str.charAt(6));

// 3. String charCodeAt()
console.log(str.charCodeAt(0));
console.log(str.charCodeAt(6));

// 4. String codePointAt()
console.log(str.codePointAt(0));
console.log(str.codePointAt(6));

// 5. String concat()
console.log(str.concat("!!!"));
console.log("Hi ".concat(str));

// 6. String at()
console.log(str.at(0));
console.log(str.at(-1));

// 7. String [ ]
console.log(str[0]);
console.log(str[6]);

// 8. String slice()
console.log(str.slice(0, 5)); // 5 exclusive
console.log(str.slice(6)); // starting index only
console.log(str.slice(-5));

// 9. String substring()
console.log(str.substring(0, 5)); // 5 exclusive
console.log(str.substring(6)); //  starting index only

// 10. String substr()
console.log(str.substr(0, 5)); // from 0 index and end after 5 chars
console.log(str.substr(6, 3)); // Wor

// 11. String toUpperCase()
console.log(str.toUpperCase());

// 12. String toLowerCase()
console.log(str.toLowerCase());

// 13. String isWellFormed()
console.log(str.isWellFormed());
console.log("Hello\uD800".isWellFormed());

// 14. String toWellFormed()
console.log("Hello\uD800".toWellFormed());

// 15. String trim()
const strWithSpaces = "  Hello World  ";
console.log(strWithSpaces.trim());

// 16. String trimStart()
console.log(strWithSpaces.trimStart()); // "Hello World  "

// 17. String trimEnd()
console.log(strWithSpaces.trimEnd()); // "  Hello World"

// 18. String padStart()
console.log("5".padStart(3, "0")); // 005
console.log("Hi".padStart(5, "*")); // ***Hi

// 19. String padEnd()
console.log("5".padEnd(3, "0")); // 500
console.log("Hi".padEnd(5, "*")); // Hi***

// 20. String repeat()
console.log("Ha".repeat(3)); // HaHaHa
console.log("-".repeat(5));

// 21. String replace()
console.log(str.replace("World", "JS")); // Hello JS
console.log("red blue".replace("red", "green"));

// 22. String replaceAll()
console.log("a-b-c".replaceAll("-", ","));
console.log("red red".replaceAll("red", "blue"));

// 23. String split()
console.log(str.split(" "));
console.log("a,b,c".split(","));