function validate(){
    let name=document.getElementById("name").value;
    let surname=document.getElementById("surname").value;
    let city=document.getElementById("city").value;
    let studemt_number=document.getElementById("studemt_number").value;
    let race=document.getElementById("race").value;
    if(name=="" || surname=="" || city =="" || studemt_number =="" || race == ""){
        if (name == "" || surname == "" || city == "" || studemt_number == "" || race == "") {
        alert("Please fill in all the fields.");
        alert("name"+name);
        alert("surname"+surname);
        alert("city"+city);
        alert("studemt_number"+studemt_number);
        return false;
    } else {
        alert("Log in successfully");
        return true;
    }
}
}