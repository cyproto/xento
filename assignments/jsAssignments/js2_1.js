function validate(e)
{
    jobTitle = document.getElementById("hidecursor1").value;
    company = document.getElementById("hidecursor2").value;
    loc = document.getElementById("hidecursor3").value;
    jobDescription = document.getElementById("hidecursor4").value;
    showerror = document.getElementById("showerr");
    showjobtitleerror = document.getElementById("showerr1");
    showsuccess = document.getElementById("submitsuccess");
    var reg = /^[a-zA-Z]*$/;
    if(jobTitle.length < 3 || company.length < 3 || loc.length < 3 || jobDescription.length < 3)
    {
        showerror.style.display = "block";
        return false;
    }
    if(!jobTitle.match(reg))
    {
        showjobtitleerror.style.display = "block";
        document.getElementById("hidecursor1").focus;
        return false;
    }
    showsuccess.style.display = "block";
    return true;
}