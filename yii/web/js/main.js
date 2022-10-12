
function bg_sun(){
    document.body.style.backgroundColor = 'white';
    document.getElementById("loginform-username").style.backgroundColor = 'white';
    document.getElementById("loginform-password").style.backgroundColor = 'white'; 
}
function bg_mun(){
    document.body.style.backgroundColor = 'gray';
    document.getElementById("loginform-username").style.backgroundColor = 'gray'; 
    document.getElementById("loginform-password").style.backgroundColor = 'gray'; 
}



    function a()
    {document.getElementById('info').innerHTML = '../uploads/sun.png' + 'drftghjk';}
    function b()
    {document.getElementById('info').innerHTML = 'kod6';}   

    document.getElementById('sun_btn').addEventListener('click', function() {
  let l = document.createElement('img');
  l.src = '../uploads/sun.png';
  
  document.body.appendChild(l);
});  