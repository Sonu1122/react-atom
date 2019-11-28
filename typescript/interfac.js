//defining an object using interfce
var customer = {
    firstName: "Tom",
    lastName: "Hanks",
    sayHi: function () { return "Hello"; }
};
console.log("Customer Object ");
console.log(customer.sayHi());
console.log(customer.firstName);
console.log(customer.lastName);
//defining a method using interface
var user = function (user) {
    console.log("Customer Method ");
    console.log(user.firstName);
    console.log(user.lastName);
};
var myObj = { firstName: 'John', lastName: "Carter" };
user({ firstName: 'John', lastName: "Carter" });
