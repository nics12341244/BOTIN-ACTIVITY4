function validateForm() {
    let id = document.getElementById("ID").value.trim();
    let pass = document.getElementById("password").value.trim();

    if (user === "" || pass ===""){
        alert("Both fields are required.");
        return false;
    }


    return true;



}