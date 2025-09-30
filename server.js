const http = require("http"); // 'nequire' should be 'require'

const server = http.createServer((req, res) => {  
res.writeHead(200, { "Content-Type": "text/plain" });
res.end("Hi, I am Antony Simon (TYBSc Computer Science, Roll No: TCS2526056).Welcome to Node.js!");
});
server.listen(3000, () => {
console.log("Server running at http://localhost:3000/");
})
