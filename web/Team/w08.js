const http = require('http');
const fs = require('fs');

const createServer = (req, res) => {

  const url = req.url;
  const method = req.method;

  if (url === '/') {      // Later make this a username form
    res.write('<html>');
    res.write('<head><title>Greating Page</title><head>');
    res.write('<body><h1>Hello, welcome to Node.js server!</h1>');
    res.write('<form action="create-user" method="POST"><input type="text" name="username"><button type="text">Submit</button></form>');
    res.write('</body></html>');
    return res.end();
  }

  // /user return a list of dummy users in html
    if (url === '/users' && method === 'POST') {      // Output a list of users
    
    res.write('<html>');
    res.write('<head><title>Users Page</title><head>');
    res.write('<body><ul><li>User 1</li><li>User 2</li></ul></body>');
    res.write('</html>');
    return res.end();
  }

  if (url === '/create-user' && method === 'POST') {    // Log to the web console 

    const body = [];

    req.on('data', (chunk) => { 
        console.log(chunk);
        body.push(chunk);
    });
    return req.on('end', () => {
        const parsedBody = Buffer.concat(body).toString();
        // console.log(parsedBody);
        const message = parsedBody.split('=')[1];
        console.log(message);
        fs.writeFile('message.txt', message, (err) => {
            res.statusCode = 302;
            res.setHeader('Location', '/');
            return res.end(); 
        });
    });
  }
};

module.exports = {
    handler: createServer,
    someText: 'Dummy Hard Coded Text'    // Output a Dummy list  
};