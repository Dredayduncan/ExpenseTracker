$('.sidebar-nav .sidebarnav li').on('click', function(){
    //Check if the tableInfo div has content in it and delete if it does
    let cont = document.getElementById("tab");
    if (cont.hasChildNodes()){
        cont.innerHTML = '';
    }

    //Populate tableInfo div
    $.get('adminControl.php', { menu: this.id }, function(data){
        $('#tab').append(data); //populate table with whatever data is returned
    });
});