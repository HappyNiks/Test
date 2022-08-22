$(function(){
    $("#loadButton").on('click', function(e){
        e.preventDefault();
        var filepath = '../storage/test.txt';
        var url = 'assets/php/main.php';
        var posting = $.post(url, {'path': filepath});
        posting.done(function(data){
            var parseData = $.parseJSON(data);
            str = ``;
            parseData.forEach(function(item){
                str += `<li class="list-group-item">${item}</li>`;
            });
            $('#list1').html(str);
        });
    });
});