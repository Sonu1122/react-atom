class Point {
    x:number;
    y:number;

    constructor(X?:number,Y?:number){// '?' in this line refers to optional parameters
        this.x = X;
        this.y = Y;
    }

    draw(){
        console.log('Value of X is ' + this.x + ' and Value of Y is ' + this.y);
    }
}

let point = new Point();

point.draw();