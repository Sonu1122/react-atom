var log = function (message) {
    console.log(message);
};
var doLog = function (message) {
    console.log(message);
};
var doAnotherLog = function (message) { return console.log(message); };
var doOtherLog = function () { return console.log('ty'); };
log('qw');
doAnotherLog('er');
doOtherLog();
