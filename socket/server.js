var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var port = process.env.NODE_PORT ? process.env.NODE_PORT : 3000;

server.listen(port);

io.on('connection', function (socket) {
    socket.emit('news', { hello: 'world' });
    socket.on('my other event', function (data) {
        console.log(data);
    });
});

console.log("Server listening on port: " + port);
