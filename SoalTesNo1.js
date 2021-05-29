const is_Password_valid = (Password) => /^ [a-zA-Z][\w]{4,9}$/.test(Password);
console.log (is_Password_valid('Xrutaf888'));
console.log(is_Password_valid('1Dianna'))