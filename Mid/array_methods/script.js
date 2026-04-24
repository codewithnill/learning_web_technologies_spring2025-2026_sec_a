/*
Important Note: Methods like pop(), push(), shift(), unshift(), reverse(), 
sort(), splice(), copyWithin(), and fill() mutate the original array. 
Methods like toReversed(), toSorted(), toSpliced(), with(), 
concat(), slice(), filter(), map() return new arrays 
without modifying the original.
*/

const arr = [10, 20, 30, 40, 50];
const arr2 = [60, 70];
const fruits = ["apple", "banana", "cherry", "banana"];

// 1. [ ] (Array literal)
const arr1 = [1, 2, 3];
console.log(arr1); // [1, 2, 3]

// 2. new Array()
const arr3 = new Array(1, 2, 3);
console.log(arr3); // [1, 2, 3]

// 3. at()
console.log(arr.at(0)); // 10
console.log(arr.at(-1)); // 50

// 4. concat()
console.log(arr.concat(arr2)); // [10, 20, 30, 40, 50, 60, 70]
console.log(arr.concat([60, 70, 80])); // [10, 20, 30, 40, 50, 60, 70, 80]

// 5. constructor
console.log(arr.constructor); // [Function: Array]

// 6. copyWithin()
const copyArr = [1, 2, 3, 4, 5];
console.log(copyArr.copyWithin(0, 3)); // [4, 5, 3, 4, 5]

// 7. entries()
const entriesArr = ["a", "b", "c"];
for (const entry of entriesArr.entries()) {
    console.log(entry); // [0, 'a'] then [1, 'b'] then [2, 'c']
}

// 8. every()
console.log(arr.every(num => num > 5)); // true
console.log(arr.every(num => num > 25)); // false
// function(num) {
//     return num;
// }

// 9. fill()
const fillArr = [1, 2, 3, 4, 5];
console.log(fillArr.fill(0, 1, 3)); // [1, 0, 0, 4, 5]

// 10. filter()
console.log(arr.filter(num => num > 25)); // [30, 40, 50]
console.log(arr.filter(num => num > 100)); // []

// 11. find()
console.log(arr.find(num => num > 25)); // 30
console.log(arr.find(num => num > 100)); // undefined

// 12. findIndex()
console.log(arr.findIndex(num => num > 25)); // 2
console.log(arr.findIndex(num => num > 100)); // -1

// 13. findLast()
console.log(arr.findLast(num => num > 25)); // 50
console.log(arr.findLast(num => num > 100)); // undefined

// 14. findLastIndex()
console.log(arr.findLastIndex(num => num > 25)); // 4
console.log(arr.findLastIndex(num => num > 100)); // -1

// 15. flat()
const nested = [1, [2, 3], [4, [5, 6]]];
console.log(nested.flat()); // [1, 2, 3, 4, [5, 6]]
console.log(nested.flat(2)); // [1, 2, 3, 4, 5, 6]

// 16. flatMap()
console.log(arr.flatMap(x => [x, x * 2])); // [10, 20, 20, 40, 30, 60, 40, 80, 50, 100]

// 17. forEach()
arr.forEach(num => console.log(num * 2)); // 20, 40, 60, 80, 100 (each on new line)

// 18. from()
console.log(Array.from("hello")); // ['h', 'e', 'l', 'l', 'o']
console.log(Array.from([1, 2, 3], x => x * 2)); // [2, 4, 6]

// 19. includes()
console.log(arr.includes(30)); // true
console.log(arr.includes(100)); // false

// 20. indexOf()
console.log(fruits.indexOf("banana")); // 1
console.log(fruits.indexOf("grape")); // -1

// 21. isArray()
console.log(Array.isArray(arr)); // true
console.log(Array.isArray("hello")); // false

// 22. join()
console.log(arr.join()); // "10,20,30,40,50"
console.log(arr.join(" - ")); // "10 - 20 - 30 - 40 - 50"

// 23. keys()
const keysArr = ["a", "b", "c"];
for (const key of keysArr.keys()) {
    console.log(key); // 0, then 1, then 2
}

// 24. lastIndexOf()
console.log(fruits.lastIndexOf("banana")); // 3
console.log(fruits.lastIndexOf("grape")); // -1

// 25. length
console.log(arr.length); // 5
console.log([].length); // 0

// 26. map()
console.log(arr.map(num => num * 2)); // [20, 40, 60, 80, 100]
console.log(arr.map(num => num + 5)); // [15, 25, 35, 45, 55]

// 27. of()
console.log(Array.of(1, 2, 3)); // [1, 2, 3]
console.log(Array.of("a", "b", "c")); // ['a', 'b', 'c']

// 28. pop()
const popArr = [10, 20, 30];
console.log(popArr.pop()); // 30
console.log(popArr); // [10, 20]

// 29. prototype
Array.prototype.first = function() {
    return this[0];
};
console.log(arr.first()); // 10

// 30. push()
const pushArr = [10, 20];
console.log(pushArr.push(30)); // 3
console.log(pushArr); // [10, 20, 30]

// 31. reduce()
console.log(arr.reduce((acc, curr) => acc + curr, 0)); // 150
console.log(arr.reduce((acc, curr) => acc * curr, 1)); // 12000000

// 32. reduceRight()
console.log(arr.reduceRight((acc, curr) => acc + curr, 0)); // 150

// 33. reverse()
const reverseArr = [1, 2, 3, 4];
console.log(reverseArr.reverse()); // [4, 3, 2, 1]

// 34. shift() removes the FIRST element and returns it
const shiftArr = [10, 20, 30];
console.log(shiftArr.shift()); // 10
console.log(shiftArr); // [20, 30]

// 35. slice() Extracts portion WITHOUT modifying original
// end exlusive and optional
console.log(arr.slice(1, 4)); // [20, 30, 40]
console.log(arr.slice(2)); // [30, 40, 50]

// 36. some()
console.log(arr.some(num => num > 40)); // true
console.log(arr.some(num => num > 100)); // false

// 37. sort()
const unsorted = [40, 10, 30, 20, 50];
console.log(unsorted.sort()); // [10, 20, 30, 40, 50]

// 38. splice() Adds/Removes elements MODIFYING original
// returns removed elements
const spliceArr = [10, 20, 30, 40];
console.log(spliceArr.splice(1, 2)); // [20, 30]
console.log(spliceArr); // [10, 40]

// 39. toReversed()
console.log(arr.toReversed()); // [50, 40, 30, 20, 10]
console.log(arr); // [10, 20, 30, 40, 50] (original unchanged)

// 40. toSorted()
const unsorted2 = [40, 10, 30, 20];
console.log(unsorted2.toSorted()); // [10, 20, 30, 40]
console.log(unsorted2); // [40, 10, 30, 20] (original unchanged)

// 41. toSpliced()
const spliceArr2 = [10, 20, 30, 40];
console.log(spliceArr2.toSpliced(1, 2)); // [10, 40]
console.log(spliceArr2); // [10, 20, 30, 40] (original unchanged)

// 42. toString()
console.log(arr.toString()); // "10,20,30,40,50"

// 43. unshift() adds to the BEGINNING and returns NEW length
const unshiftArr = [20, 30];
console.log(unshiftArr.unshift(10)); // 3
console.log(unshiftArr); // [10, 20, 30]

// 44. valueOf()
console.log(arr.valueOf()); // [10, 20, 30, 40, 50]

// 45. with()
const withArr = [10, 20, 30, 40];
console.log(withArr.with(1, 99)); // [10, 99, 30, 40]
console.log(withArr); // [10, 20, 30, 40] (original unchanged)
