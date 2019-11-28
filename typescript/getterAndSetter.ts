class Pointed {
    constructor(public x?:number,private y?:number){// '?' in this line refers to optional parameters
    }

    draw(){
        console.log('Value of X is ' + this.x + ' and Value of Y is ' + this.y);
    }

    get xval(){
        return this.x;
    }

    set xval(value){
        if(value < 0){
            throw new Error('value cannot be 0');
        }
        this.x = value;
    }
}

let pointed = new Pointed();
let x = pointed.xval;

pointed.xval = 10;