console.log('Hello from Node.js!');

const fs = require('fs');

fs.writeFileSync('hello.txt', 'Hello from Node.js!');


const name = "Josh";
let age = 24;
const hasHobbies = true;

const summarizeUser = (userName, userAge, userHasHobby) => {
    return (
        'My name is ' + userName +
        ', I am ' + userAge + ' years old' +
        ', and ' + userName + ' has hobbies: ' + userHasHobby
    );
};

const add = (a, b) => a + b; // When there's only one line of code to return, we don't need curly brackets or a return case

const addOne = a => a + 1; // When there's only one parameter, we don't even need to have parentheses around them!

console.log(add(1, 2));

console.log(addOne(12));

console.log(summarizeUser(name, age, hasHobbies));

const person = {
    name: 'Josh',
    age: 23,
    greet() {
        console.log('Hi, I am ' + this.name); // 'this' here refers to the person object
    }
};

const hobbies = ['Sports', 'Cooking'];
const [hobby1, hobby2] = hobbies;
for (let hobby of hobbies) { // We're looping through hobbies and storing every element into a new container, hobby
    console.log(hobby);
}
console.log(hobby1, hobby2);

// console.log(hobbies.map(hobby => 'Hobby: ' + hobby)); // map(), Essentially puts a label in front of each item in an array

// console.log(hobbies);

// hobbies.push('Programming'); // We add to an const here, because we change the data, not the address that contains the data

// const copiedArray = hobbies.slice(); // To copy an array
// console.log(copiedArray);

// const newCopyArray = [...hobbies]; // SPREAD Operator, to copy an array, to pull elements out of an array
// console.log(newCopyArray);

// const toArray = (...args) => { // REST Operator, to merge multiple arguments together into a singular variable
//     return [args];
// }
// console.log(toArray(1,2,3,4,5,6));

const printNameFromPerson = ({ name, age }) => { // Pulling from the person object variables
    console.log(name, age);
}
printNameFromPerson(person);

// const { name, age } = person;
console.log(name, age);

const fetchData = () => {
    const promise = new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Done!');
        }, 1500);
    });
    return promise;
};

setTimeout(() => {
    console.log('Timer is done!');
    fetchData()
        .then(text => {
            console.log(text);
            return fetchData();
        })
        .then(text2 => {
            console.log(text2);
        });
}, 2000);