let MailRegex = /^([a-z 0-9\.-]+)@([a-z 0-9-]+).([a-z]){2,8}(.[a-z]{2,8})?$/;

let MailValidationFunction = () =>{
    let fname = document.forms['myForm']['Fname'].value;
    let Lname = document.forms['myForm']['Lname'].value;
    let E_mail = document.forms['myForm']['E_mail'].value;
    let tel = document.forms['myForm']['TelNumber'].value;
    let pass = document.forms['myForm']['PassWrd'].value;


    if (MailRegex.test(E_mail) === false) {

        alert('invalid email \n please provide like: Dany@gmail.com');
        return false;
        
    }
}