const path = require('path');

const express = require('express');
const bodyParser = require('body-parser');

const app = express(); 
// "use strict";

app.set('view engine', 'ejs');
app.set('views', __dirname + '/views');
const sendRoute = require('./routes/send');
app.use(bodyParser.urlencoded({ extended: false }));
app.use(express.static(path.join(__dirname, 'public')));

app.get('/',(req, res, next) => {
  //render page here...
  res.render('home');
});

let from;
let to;
let subject;
let emailText;

console.log('Entering post...');
app.get('./views/sent',(req, res, next) => {
  console.log('Inside post...');
  from = req.body.sender;
  to = req.body.recipient;
  subject = req.body.subject;
  emailText = req.body.emailText;
  
  console.log('From ' + from);
  console.log('to ' + to);
  console.log('subject ' + subject);
  console.log('email ' + emailText);

  async function main() {
  //main function should happen inside this...
  // Generate test SMTP service account from ethereal.email
  // Only needed if you don't have a real mail account for testing
  let testAccount = await nodemailer.createTestAccount();

    // create reusable transporter object using the default SMTP transport
    let transporter = nodemailer.createTransport({
      host: "smtp.ethereal.email",
      port: 587,
      secure: false, // true for 465, false for other ports
      auth: {
        user: testAccount.user, // generated ethereal user
        pass: testAccount.pass // generated ethereal password
      }
    });

    // send mail with defined transport object
    let info = await transporter.sendMail({
      from: '"Fred Foo 👻" <foo@example.com>', // sender address
      to: "rogerio.taxlien@gmail.com", // list of receivers
      subject: "Hello ✔", // Subject line
      text: "That's npm init?", // plain text body
      html: "<b>Hello world?</b>" // html body
    });

  console.log("Message sent: %s", info.messageId);
  // Message sent: <b658f8ca-6296-ccf4-8306-87d57a0b4321@example.com>

  // Preview only available when sending through an Ethereal account
  console.log("Preview URL: %s", nodemailer.getTestMessageUrl(info));
  // Preview URL: https://ethereal.email/message/WaQKMgKddxQDoou...

  res.redirect('./views/sent.ejs');
  main().catch(console.error);
  }
});

// https://nodemailer.com/about/
const nodemailer = require("nodemailer");


app.listen(3000);