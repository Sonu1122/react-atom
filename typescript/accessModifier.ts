// if we prefix typescript constructor with access modifier, Typescript compiler will generate fields 
// with exact same name and will also initialize the parameter.

class Points {
    //private x:number;
    //private y:number;

    constructor(public X?:number,private Y?:number){// '?' in this line refers to optional parameters
    }

    draw(){
        console.log('Value of X is ' + this.X + ' and Value of Y is ' + this.Y);
    }
}

let points = new Points();

points.draw();