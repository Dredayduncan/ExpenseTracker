$('.sidebar-nav ul li').on('click', function(){
    //Check if the tableInfo div has content in it and delete if it does
    let cont = document.getElementById("tab");
    if (cont.hasChildNodes()){
        cont.innerHTML = '';
    }

    // console.log(this.id);
    //Populate tableInfo div
    $.get('adminControl.php', { menu: this.id }, function(data){
        console.log(this.id);
        $('#tab').append(data); //populate table with whatever data is returned
    });

    $('.card-title').html(this.id.charAt(0).toUpperCase() + this.id.slice(1) + ' Overview');
});

$('#user').click();