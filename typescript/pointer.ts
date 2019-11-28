export class Pointer {
    //private x:number;
    //private y:number;

    constructor(public X?:number,private Y?:number){// '?' in this line refers to optional parameters
    }

    draw(){
        console.log('Value of X is ' + this.X + ' and Value of Y is ' + this.Y);
    }
}