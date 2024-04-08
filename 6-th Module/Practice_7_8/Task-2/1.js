$(document).ready(function() {
    let selection_container = $('.selection-container');

    $('.choose-district').click(function() {
        let parent_obj = $(this);
        if (parent_obj.find('option').length <= 1) {
            $.ajax({
                url: './obr.php',
                type: 'POST',
                data: { choice: 'district'},
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, item) {
                        let add_district_option = $('<option>', {
                            'value': item.id,
                            'text': item.title
                        });
                        parent_obj.append(add_district_option);
                    })
                }
            });
        }
    });

    $('.choose-district').change(function() {
        let selected_district = $(this).children('option:selected').val();
        let selection_container_height = parseInt(selection_container.css('height'));

        if(selected_district != 'empty') {            
            if(selection_container.find('.choose-area-container').length == 0) {
                let div_area = $('<div>', { 'class': 'choose-area-container' });
                div_area.append($('<p>', { 'text': 'Выберите район' }));

                let add_select_area = $('<select>', { 'class': 'choose-area' });
                add_select_area.append($('<option>', { 'value': 'empty'}));

                div_area.append(add_select_area);
                selection_container.append(div_area);

                add_select_area.change(ChangeArea);
            }
            else {
                $('.choose-area-container').show();
            }

            if(selection_container_height == 100) {
                selection_container_height += 100;
                selection_container.css('height', `${selection_container_height}px`);
            }

            if($('.choose-area').find('option').length != 0) {
                $('.choose-area').empty();
                $('.choose-area').append($('<option>', { 'value': 'empty'}));
            }  

            $.ajax({
                url: './obr.php',
                type: 'POST',
                data: {choice: 'area', 'id_district': selected_district},
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, item) {
                        let add_area_option = $('<option>', {
                            'value': item.id,
                            'text': item.title
                        });
                        $('.choose-area').append(add_area_option);
                    });
                }
            });

            if(selection_container.find('.choose-street-container').length != 0 && selection_container.find('.choose-street-container').css('display') != 'none') {
                $('.choose-street-container').hide();
                selection_container.css('height', `${selection_container_height - 100}px`);
            }
        }
        else {
            if(selection_container.find('.choose-area-container').css('display') != 'none' && selection_container.find('.choose-street-container').length != 0 && selection_container.find('.choose-street-container').css('display') != 'none') {
                $('.choose-area-container').hide();
                $('.choose-street-container').hide();
                selection_container.css('height', `${selection_container_height - 200}px`);
            } 
            else if(selection_container.find('.choose-area-container').css('display') != 'none') {
                $('.choose-area-container').hide();
                selection_container.css('height', `${selection_container_height - 100}px`);
            }
        }
        if($('.main-container').find('.result').length != 0) {
            $('.result').hide();
        }
    });

    function ChangeArea() {
        let selected_area = $(this).children('option:selected').val();
        let selection_container_height = parseInt(selection_container.css('height'));

        if(selected_area != 'empty') {
            if(selection_container.find('.choose-street-container').length == 0) {
                let div_street = $('<div>', { 'class': 'choose-street-container' });
                div_street.append($('<p>', { 'text': 'Выберите улицу' }));

                let add_select_street = $('<select>', { 'class': 'choose-street' });
                add_select_street.append($('<option>', { 'value': 'empty'}));

                div_street.append(add_select_street);
                selection_container.append(div_street);

                add_select_street.change(ShowResult);
            }
            else {
                $('.choose-street-container').show(); 
            }

            if(selection_container_height == 200) {
                selection_container_height += 100;
                selection_container.css('height', `${selection_container_height}px`);
            }

            if($('.choose-street').find('option').length != 0) {
                $('.choose-street').empty();
                $('.choose-street').append($('<option>', { 'value': 'empty'}));
            }

            $.ajax({
                url: 'obr.php',
                type: 'POST',
                data: { choice: 'street', 'id_area': selected_area},
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, item) {
                        let add_area_option = $('<option>', {
                            'value': item.id,
                            'text': item.title
                        });
                        $('.choose-street').append(add_area_option);
                    });
                }
            });
        }
        else {
            selection_container.css('height', `${selection_container_height - 100}px`);
            $('.choose-street-container').hide();
        }
        if($('.main-container').find('.result').length != 0) {
            $('.result').hide();
        }
    }

    function ShowResult() {
        let selected_street = $(this).children('option:selected').val();

        if(selected_street != 'empty') {
            let result_district = $('.choose-district').children('option:selected').text();
            let result_area = $('.choose-area').children('option:selected').text();
            let result_street = $('.choose-street').children('option:selected').text();
            let result_string = `Адрес: г. Москва, ${result_district}, р-н ${result_area}, ул. ${result_street}.`;
            if($('.main-container').find('.result').length == 0) {
                $('.main-container').append($('<div>', { 'class': 'result'}));
            }
            else {
                $('.result').show();
            }

            $('.result').text(result_string);
        }
        else {
            $('.result').hide();
        }
    }
});
