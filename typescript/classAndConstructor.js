var Point = /** @class */ (function () {
    function Point(X, Y) {
        this.x = X;
        this.y = Y;
    }
    Point.prototype.draw = function () {
        console.log('Value of X is ' + this.x + ' and Value of Y is ' + this.y);
    };
    return Point;
}());
var point = new Point();
point.draw();
