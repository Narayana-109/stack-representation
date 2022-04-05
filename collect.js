function collect()
{
    const email=document.getElementById('email').value;
    const name=document.getElementById('name').value;

    localStorage.setItem("EMAIL",email);
    localStorage.setItem("NAME",name);
    return;
}