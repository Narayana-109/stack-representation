function givedata()
{

// window.addEventListener('load',() =>{
var email=localStorage.getItem('EMAIL');
var name=localStorage.getItem('NAME');
document.getElementById("chkemail").value=email;
document.getElementById("chkname").value=name;
// })
}

function changed()
{
    var x = "<?php updaterow_intopo(); ?>";
    return false;
}

function pa()
{
    eval("<?php putf(); ?>")
    return false;
}