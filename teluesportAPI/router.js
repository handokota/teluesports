const { response } = require("express");
const express = require("express");
// import file database dengan konstanta connection
const connection = require("./database");
// buatlah router express dengan konstanta router
const router = new express.Router();

router.get("/", (req, res) => {
  res.send("Welcome!")
});

router.get("/getAllMember", (req, res) => {
  connection.query("SELECT * FROM user ORDER BY create_at DESC", (error, rows, field)=>{
    if(error){
      res.status(500).json({msg:error})
    } else {
      res.status(200).json({msg:"Successfull fetch "+ rows.length + " data", data:rows, status:200})
    }
  })
});



module.exports = router;
