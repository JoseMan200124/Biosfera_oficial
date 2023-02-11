/*
var btnAbrirPopup = document.getElementById('btnIcon'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btnIcon');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});


btnCerrarPopup.addEventListener('mouseout', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
*/

// var btnOpenUser = document.getElementById('btnIcon'),
//     btnOpenOptions = document.getElementById('btnIcon4');

// btnOpenUser.addEventListener('click', function(){
//     var mypopup = document.getElementById('overlay');
//     var displaySetting = mypopup.style.visibility;

//     if(displaySetting == 'visible'){
//         mypopup.style.visibility = 'hidden';
//         overlay.classList.remove('active');
// 	    popup.classList.remove('active');
//     }
//     else{
//         mypopup.style.visibility = 'visible';       
//         overlay.classList.add('active');
//         popup.classList.add('active'); 
//     }
// });

// function showPopup(){
//     var mypopup = document.getElementById('popup');
//     var displaySetting = mypopup.style.visibility;

//     if(displaySetting == 'visible'){
//         mypopup.style.visibility = 'hidden';
// 	    mypopup.classList.remove('active');
//     }
//     else{
//         mypopup.style.visibility = 'visible';
//         mypopup.classList.add('active'); 
//     }
// }

function showPopup(element){
    
    if(element.style.visibility == 'visible'){ 
        element.style.visibility = 'hidden';
	    element.classList.remove('active');
    }
    else{
        element.style.visibility = 'visible';
        element.classList.add('active'); 
    }
}