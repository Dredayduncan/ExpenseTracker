var addBtn = document.getElementById('add-button');
// addBtn.onmouseover = function(){

//     addBtn.classList.remove('bg-warning');
   
// };
// addBtn.classList.add('bg-warning');

$('#add-button').hover(
    addBtn.classList.remove('bg-warning'),
    addBtn.classList.add('bg-warning')
);

$('#scanimg').on('click', function(){
    $('#img').click();
});