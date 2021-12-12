function minunCartHb(id) {
    plusMinunCart('minun', id)
}

function plusCartHb(id) {
    plusMinunCart('plus', id)
}

function plusMinunCart(type, id) {
    let idInput = $('#' + id)
    let maxValue = parseInt(idInput.prop('max'))
    switch (type) {
        case 'plus':
            if (parseInt(idInput.val()) < maxValue) {
                idInput.val(parseInt(idInput.val()) + 1)
                $("[name='update_cart']").prop("disabled", false)
                // $("[name='update_cart']").trigger('click');
            }
            break;
        case 'minun':
            if (parseInt(idInput.val()) !== 0) {
                idInput.val(parseInt(idInput.val()) - 1)
                $("[name='update_cart']").prop("disabled", false)
                // $("[name='update_cart']").trigger('click');
            }
            break;
    }
}

