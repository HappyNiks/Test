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

    $("#sortButton").on('click', function(e){
        var sortingType = $("#sortingSelect").val();
        if (sortingType != 0){
            e.preventDefault();
            var arr = $("#list1 li").map(function() {
                return $(this).text();
            }).get();
            var url = 'assets/php/sort.php';
            var posting = $.post(url, {'data':arr, 'sorting':sortingType});
            posting.done(function(data){
                // console.log($.parseJSON(data));
                var parseData = $.parseJSON(data);
                str = ``;
                parseData.forEach(function(item){
                    str += `<li class="list-group-item">${item}</li>`;
                });
                $('#list2').html(str);
            })
        }
    });
});