import express from "express";

const app = express();
const port = 3000;

// function logger(req, res,next ){
//     console.log("smeet Has crush on Anagha");
//     console.log("request Method",req.method);
//     console.log("request url",req.url);
//     next();
//   };
// app.use(logger);  

app.get("/bmi.html", (req, res) => {
  res.send("Hello");
});

app.listen(port, () => {
  console.log(`Listening on port ${port}`);
});
