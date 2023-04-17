const bcrypt = require('bcrypt');

const password = 'password123'; // user's entered password
const saltRounds = 10; // number of salt rounds
const salt = bcrypt.genSaltSync(saltRounds); // generate a salt value
const hash = bcrypt.hashSync(password, salt); // hash the password and salt together

console.log('Salt:', salt);
console.log('Hash:', hash);


function execSomething($ele){
    let x=document.getElementsByClassName("alert success");
    console.log(x.innerHTML);
    //
}

$(".close").click(function() {
    console.log("DEBUG: close debugged");
    $(this)
        .parent(".alert")
        .fadeOut(); //jquery method
});