"use strict";
exports.__esModule = true;
var Pointer = /** @class */ (function () {
    //private x:number;
    //private y:number;
    function Pointer(X, Y) {
        this.X = X;
        this.Y = Y;
    }
    Pointer.prototype.draw = function () {
        console.log('Value of X is ' + this.X + ' and Value of Y is ' + this.Y);
    };
    return Pointer;
}());
exports.Pointer = Pointer;
