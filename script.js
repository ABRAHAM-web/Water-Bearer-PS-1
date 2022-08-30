'use strict';

const btnAll = document.querySelectorAll('.menuItems');
const modals = document.querySelectorAll('.modal0');
//const closeModals = document.querySelectorAll('.closeModal');
//const container = document.querySelector('.container');
//const body = document.querySelector('body');
//const AT = document.querySelectorAll('.analysisTable');
//const ar = document.querySelector(".addRow");
//const ri = document.querySelectorAll(".registerInput");
//const rb = document.querySelector(".registerButton");
//const sb = document.querySelector('.sb');
//const vc = document.querySelector('.ValidationCode');


// vc.addEventListener('click',function () {
//     //add code to send an email
// });



//Adding code for register button click
// rb.addEventListener('click',function () {
//    for (let i=0;i<=ri.length;i++) {
//        if (ri[i].classList.contains('hidden')) {
//            ri[i].classList.remove('hidden');
//            rb.textContent = 'Cancel';
//        } else {
//            ri[i].classList.add('hidden');
//            rb.textContent = 'Register';
//        }
//    };
// });




//console.log(rndno);
//<td>${nowDate.getFullYear()}-${nowDate.getMonth()+1}-${nowDate.getDay()+1}</td>
//


// for (let i = 0; i < closeModals.length; i++) {
//     closeModals[i].addEventListener('click', function() {
//         modals[i].classList.add('hidden');
//     });
// };

//Home screen
btnAll[0].addEventListener('click', function() {
    modals[0].classList.remove('hidden');
    modals[1].classList.add('hidden');
    modals[2].classList.add('hidden');
    modals[3].classList.add('hidden');

    btnAll[0].classList.add('active');
    btnAll[1].classList.remove('active');
    btnAll[2].classList.remove('active');
    btnAll[3].classList.remove('active');

    console.log("Home Button clicked")
});


//Orders screen
btnAll[1].addEventListener('click', function() {
    modals[0].classList.add('hidden');
    modals[1].classList.remove('hidden');
    modals[2].classList.add('hidden');
    modals[3].classList.add('hidden');

    btnAll[0].classList.remove('active');
    btnAll[1].classList.add('active');
    btnAll[2].classList.remove('active');
    btnAll[3].classList.remove('active');

    console.log("Products Button clicked")
});

//Analysis screen
btnAll[2].addEventListener('click', function() {
    modals[0].classList.add('hidden');
    modals[1].classList.add('hidden');
    modals[2].classList.remove('hidden');
    modals[3].classList.add('hidden');

    btnAll[0].classList.remove('active');
    btnAll[1].classList.remove('active');
    btnAll[2].classList.add('active');
    btnAll[3].classList.remove('active');
    console.log("Analysis Button clicked")
});

btnAll[3].addEventListener('click', function() {
    modals[0].classList.add('hidden');
    modals[1].classList.add('hidden');
    modals[2].classList.add('hidden');
    modals[3].classList.remove('hidden');

    btnAll[0].classList.remove('active');
    btnAll[1].classList.remove('active');
    btnAll[2].classList.remove('active');
    btnAll[3].classList.add('active');
    console.log("Contact Button clicked")
});
