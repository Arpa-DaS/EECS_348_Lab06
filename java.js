function validate() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;


    if (pass1.length < 8) {
        alert("The length of the first password is less than 8 letters!")
    } else if (pass2.length < 8) {
        alert("The length of the second password is less than 8 letters!")
    } else if (pass1 != pass2) {
        alert("Two passwords don't match!")
    } else {
        alert("Everything is good!")
    }
}
function applyStyles() {
    
    const textR = document.getElementById("textR").value;
    const textG = document.getElementById("textG").value;
    const textB = document.getElementById("textB").value;
    const borderR = document.getElementById("borderR").value;
    const borderG = document.getElementById("borderG").value;
    const borderB = document.getElementById("borderB").value;
    const borderWidth = document.getElementById("borderWidth").value;

   
    document.getElementById("text-box").style.color = `rgb(${textR}, ${textG}, ${textB})`;

    
    document.getElementById("text-box").style.borderColor = `rgb(${borderR}, ${borderG}, ${borderB})`;
    document.getElementById("text-box").style.borderWidth = `${borderWidth}px`;
}
