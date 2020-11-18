$(document).on('click','.rating-star', function () {
    let rate = parseInt($(this).attr('data-id'))
    let user_id = parseInt($(this).closest('.user-item').attr('data-user-id'))

    setRating(user_id,rate)

    $.ajax({
        url: "/router.php",
        type: "GET",
        data: {
            action: 'addUserRate',
            rate: rate,
            user_id: user_id
        },
        success: function (data) {
            $(".user-item[data-user-id='" + data.user_id + "']").append('<p style="text-align: center; color: #1ad6ac;">Thanks for rating the user!</p>')
        },
        error: function (xhr, ajaxOptions, thrownError) {
            $(".star-rating").append('<p style="text-align: center; color: red;">Something going wrong!!</p>')
        },
        timeout: 15000
    });
})

function setRating(user_id,rate){

    $('.user-item[data-user-id="' + user_id + '"] .rating-star').removeClass('checked')

    for (let i = 1; i < rate + 1; i++){
        $('.user-item[data-user-id="' + user_id + '"] .rating-star[data-id="' + i + '"]').addClass('checked')
    }

    $('.user-item[data-user-id="' + user_id + '"]').attr('data-rate', rate)

}

$(window).ready(function () {
    $('.user-item').each(function (index, item){

        let rate = parseInt($(item).attr('data-rate'))
        let user_id = parseInt($(item).attr('data-user-id'))

        setRating(user_id,rate)
    })
})

$('.clear-btn button').on('click',function () {
    $.ajax({
        url: "/router.php",
        type: "GET",
        data: {
            action: 'clearSession'
        },
        success: function (data) {
        },
        error: function (xhr, ajaxOptions, thrownError) {
        },
        timeout: 15000
    });
})