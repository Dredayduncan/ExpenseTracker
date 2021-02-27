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
    var amount = $(this).prev().find('h1').html().slice(3);
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



$('#img').change(function() {
    $('#picture').submit();
});

// validate daily limit
$('#editForm').on('click', function(){
    var amount = parseInt($('#formEdit #amount').val());
    var total = parseInt($('#total').html().slice(3));
    var lim = parseInt($('#dailylimit').html().slice(3));

    if ((amount + total) > lim ){
        return false;
    }
});

$('#addForm').on('click', function(){
    var amount = parseInt($('#formAdd #amount').val());
    var total = parseInt($('#total').html().slice(3));
    var lim = parseInt($('#dailylimit').html().slice(3));

    if ((amount + total) > lim ){
        return false;
    }
});