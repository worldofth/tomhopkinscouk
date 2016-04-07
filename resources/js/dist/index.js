(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var sum = function sum(a) {
    var b = arguments.length <= 1 || arguments[1] === undefined ? 6 : arguments[1];
    return a + b;
};

var square = function square(b) {
    return b * b;
};

var variable = 8;

var MyClass = function () {
    function MyClass(credentials) {
        _classCallCheck(this, MyClass);

        this.name = credentials.name;
        this.enrollmentNo = credentials.enrollmentNo;
    }

    _createClass(MyClass, [{
        key: "getName",
        value: function getName() {
            return this.name;
        }
    }]);

    return MyClass;
}();

exports.sum = sum;
exports.square = square;
exports.variable = variable;
exports.MyClass = MyClass;

},{}],2:[function(require,module,exports){
'use strict';

var _import = require('./import');

// 25
console.log((0, _import.square)(5));

var cred = {
    name: 'Ritesh Kumar',
    enrollmentNo: 11115078
};

var x = new _import.MyClass(cred);

//Ritesh Kumar
console.log(x.getName());

console.log((0, _import.sum)(7, 8));

},{"./import":1}]},{},[2])
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJyZXNvdXJjZXNcXGpzXFxzcmNcXGltcG9ydC5qcyIsInJlc291cmNlc1xcanNcXHNyY1xcaW5kZXguanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7Ozs7Ozs7Ozs7O0FDQUEsSUFBSSxNQUFNLFNBQU4sR0FBTSxDQUFDLENBQUQ7UUFBSSwwREFBSTtXQUFPLElBQUksQ0FBSjtDQUFmOztBQUVWLElBQUksU0FBUyxTQUFULE1BQVMsQ0FBQyxDQUFELEVBQU87QUFDaEIsV0FBTyxJQUFJLENBQUosQ0FEUztDQUFQOztBQUliLElBQUksV0FBVyxDQUFYOztJQUVFO0FBQ0YsYUFERSxPQUNGLENBQVksV0FBWixFQUF5Qjs4QkFEdkIsU0FDdUI7O0FBQ3JCLGFBQUssSUFBTCxHQUFZLFlBQVksSUFBWixDQURTO0FBRXJCLGFBQUssWUFBTCxHQUFvQixZQUFZLFlBQVosQ0FGQztLQUF6Qjs7aUJBREU7O2tDQUtRO0FBQ04sbUJBQU8sS0FBSyxJQUFMLENBREQ7Ozs7V0FMUjs7O1FBVUc7UUFBSztRQUFRO1FBQVU7Ozs7O0FDbEJoQzs7O0FBRUEsUUFBUSxHQUFSLENBQVksb0JBQU8sQ0FBUCxDQUFaOztBQUVBLElBQUksT0FBTztBQUNQLFVBQU0sY0FBTjtBQUNBLGtCQUFjLFFBQWQ7Q0FGQTs7QUFLSixJQUFJLElBQUksb0JBQVksSUFBWixDQUFKOzs7QUFHSixRQUFRLEdBQVIsQ0FBWSxFQUFFLE9BQUYsRUFBWjs7QUFFQSxRQUFRLEdBQVIsQ0FBWSxpQkFBSSxDQUFKLEVBQU0sQ0FBTixDQUFaIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24gZSh0LG4scil7ZnVuY3Rpb24gcyhvLHUpe2lmKCFuW29dKXtpZighdFtvXSl7dmFyIGE9dHlwZW9mIHJlcXVpcmU9PVwiZnVuY3Rpb25cIiYmcmVxdWlyZTtpZighdSYmYSlyZXR1cm4gYShvLCEwKTtpZihpKXJldHVybiBpKG8sITApO3ZhciBmPW5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIrbytcIidcIik7dGhyb3cgZi5jb2RlPVwiTU9EVUxFX05PVF9GT1VORFwiLGZ9dmFyIGw9bltvXT17ZXhwb3J0czp7fX07dFtvXVswXS5jYWxsKGwuZXhwb3J0cyxmdW5jdGlvbihlKXt2YXIgbj10W29dWzFdW2VdO3JldHVybiBzKG4/bjplKX0sbCxsLmV4cG9ydHMsZSx0LG4scil9cmV0dXJuIG5bb10uZXhwb3J0c312YXIgaT10eXBlb2YgcmVxdWlyZT09XCJmdW5jdGlvblwiJiZyZXF1aXJlO2Zvcih2YXIgbz0wO288ci5sZW5ndGg7bysrKXMocltvXSk7cmV0dXJuIHN9KSIsInZhciBzdW0gPSAoYSwgYiA9IDYpID0+IChhICsgYik7XG5cbnZhciBzcXVhcmUgPSAoYikgPT4ge1xuICAgIHJldHVybiBiICogYjtcbn07XG5cbnZhciB2YXJpYWJsZSA9IDg7XG5cbmNsYXNzIE15Q2xhc3Mge1xuICAgIGNvbnN0cnVjdG9yKGNyZWRlbnRpYWxzKSB7XG4gICAgICAgIHRoaXMubmFtZSA9IGNyZWRlbnRpYWxzLm5hbWU7XG4gICAgICAgIHRoaXMuZW5yb2xsbWVudE5vID0gY3JlZGVudGlhbHMuZW5yb2xsbWVudE5vXG4gICAgfVxuICAgIGdldE5hbWUoKSB7XG4gICAgICAgIHJldHVybiB0aGlzLm5hbWU7XG4gICAgfVxufVxuXG5leHBvcnQgeyBzdW0sIHNxdWFyZSwgdmFyaWFibGUsIE15Q2xhc3MgfTsiLCJpbXBvcnQge3N1bSwgc3F1YXJlLCBNeUNsYXNzfSBmcm9tICcuL2ltcG9ydCc7XG4vLyAyNVxuY29uc29sZS5sb2coc3F1YXJlKDUpKTtcblxudmFyIGNyZWQgPSB7XG4gICAgbmFtZTogJ1JpdGVzaCBLdW1hcicsXG4gICAgZW5yb2xsbWVudE5vOiAxMTExNTA3OFxufVxuXG52YXIgeCA9IG5ldyBNeUNsYXNzKGNyZWQpO1xuXG4vL1JpdGVzaCBLdW1hclxuY29uc29sZS5sb2coeC5nZXROYW1lKCkpO1xuXG5jb25zb2xlLmxvZyhzdW0oNyw4KSk7Il19
