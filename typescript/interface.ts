interface Person { 
    firstName:string, 
    lastName:string, 
    sayHi: ()=>string 
 } 

 interface User { 
    firstName:string, 
    lastName:string
 } 
 //defining an object using interfce
 let customer:Person = { 
    firstName:"Tom",
    lastName:"Hanks", 
    sayHi: ():string =>{return "Hello"} 
 } 
 
 console.log("Customer Object ") 
 console.log(customer.sayHi())
 console.log(customer.firstName) 
 console.log(customer.lastName) 
 
//defining a method using interface
let user = (user:User) => {
    console.log("Customer Method ")
    console.log(user.firstName) 
    console.log(user.lastName)  
}
let myObj = {firstName: 'John', lastName: "Carter"};
user({firstName: 'John', lastName: "Carter"});