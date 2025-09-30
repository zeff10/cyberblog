const http = require("http"); 
const server = http.createServer((req, res) => { 
res.write("<h1>Welcome to Node.js Web Server</h1>"); 
res.write("<p>Antony Simon - TCS2526056</p>");
res.write("<p>This is an HTML response.</p>");
res.end(); 
});

server.listen(4000, () => {
console.log("Server running at http://localhost:4000/"); 
});
