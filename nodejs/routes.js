const fs = require('fs');

const requestHandler = (req, res) => {
    const url = req.url;
    const method = req.method;

    if (url === '/') {
        res.write('<html>');
        res.write('<head><title>Enter Message</title></head>');
        res.write('<body><ul><form action="/message" method="POST"><li><input type="text" name="first"></li><li><input type="text" name="second"></li><br><button type="submit">Send</button></form></body>');
        res.write('</html>');
        return res.end();
    }
    
    if (url === '/message' && method === 'POST') {
        const body = [];
        req.on('data', (first) => {
            console.log(first);
            body.push(first);
            res.write('<html>');
            res.write('<head><title>Message Display</title></head>');
            res.write('<body><div name="first">');
            res.write(first);
            res.write('</div><br>')
        });
        req.on('data', (second) => {
            console.log(second);
            body.push(second);
            res.write('<div name="second">');
            res.write(second); 
            res.write('</div></body></html>');
        });
        return req.on('end', () => {
            const parseBody = Buffer.concat(body).toString();
            const message = parseBody.split('=')[1];
            fs.writeFile('serverMessage.txt', message, (err) => {  
                res.writeHead(302, { Location: '/' });
                return res.end();  
            });
        });
    }
};


// module.exports = {
//     handler: requestHandler,
//     someText: 'Some hard coded text'
// };

exports.handler = requestHandler;
exports.someText = 'Some hard coded text';



