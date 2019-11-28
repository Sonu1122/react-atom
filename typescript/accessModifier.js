// if we prefix typescript constructor with access modifier, Typescript compiler will generate fields 
// with exact same name and will also initialize the parameter.
var Points = /** @class */ (function () {
    //private x:number;
    //private y:number;
    function Points(X, Y) {
        this.X = X;
        this.Y = Y;
    }
    Points.prototype.draw = function () {
        console.log('Value of X is ' + this.X + ' and Value of Y is ' + this.Y);
    };
    return Points;
}());
var points = new Points();
points.draw();
