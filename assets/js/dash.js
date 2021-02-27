var addBtn = document.getElementById('add-button');


$('#add-button').hover(
    addBtn.classList.remove('bg-warning'),
    addBtn.classList.add('bg-warning')
);

$('#scanimg').on('click', function(){
    $('#img').click();
});


var item = -1;
//Edit expenses
$('.util1').on('click', function(){
    item = $(this).children('a').attr('id'); 
    // Get data of record
    var amount = $(this).prev().find('h1').html().slice(4);
    var cat = $(this).prev().prev().find('.cat').html();
    var method = $(this).prev().prev().find('.meth').html();
    var desc = $(this).prev().prev().find('.desc').html();

    // Set data of input values to edit
    $('#formEdit #amount').val(amount);
    $('#formEdit #category').val(cat);
    $('#formEdit #method').val(method);
    $('#formEdit #description').val(desc);
    $('#formEdit #expenseID').val(item);

});


//Delete expenses

$('.util2').on('click', function(){
    item = $(this).children('a').attr('id');
});

$('#confirmDelete').on('click', function(){
    $.post('control.php', {delete: 'confam', expenseID: item}, function(data){
        location.reload();
    });
});

// Get Image input
// function pictureInput(event){
//     var input = document.getElementById('myFile');

//     var reader = new FileReader();
//     reader.onload = function(){
//     var dataURL = reader.result;
//     var output = document.getElementById('pic');
//     output.src = dataURL;
//     $.post('imageToText.php', function(data){
//             console.log(data);
//     });
//     };
//     reader.readAsDataURL(input.files[0]);

//     return false;
// }

$('#img').change(function() {
    $('#picture').submit();
});