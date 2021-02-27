var addBtn = document.getElementById('add-button');


$('#add-button').hover(
    addBtn.classList.remove('bg-warning'),
    addBtn.classList.add('bg-warning')
);

$('#scanimg').on('click', function(){
    $('#img').click();
});

//Edit expenses
$('.util1').on('click', function(){
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

});


//Delete expenses
var itemToDeleteId = -1;
$('.util2').on('click', function(){
    itemToDeleteId = $(this).children('a').attr('id');
});

$('#confirmDelete').on('click', function(){
    $.post('control.php', {delete: 'confam', expenseID: itemToDeleteId}, function(data){
        location.reload();
    });
});