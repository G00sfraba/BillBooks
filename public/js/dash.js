var modalHolder = "primaryModal";
var modalLoading = '<div><i class="fa fa-refresh fa-spin fa-3x fa-fw" style="margin:70px 48%;"></i><span class="sr-only">Loading...</span></div>';
var alertIsActive = false;
var alertTpe = null;

$(document).ready(function () {
    $(".btn-new-client").click(function () {
        getModal("client", "create-dialog", initClientDialog());
    });
});

function submitModalForm(formId, successCallback, errorCallback) {
    var form = $('#' + formId);
    form.on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        var formAction = form.attr('action');

        $.post(formAction, formData)
                .done(function (response) {
                    var parsedResponse = JSON.parse(response);
                    submitModalSuccess(parsedResponse);
                    if (typeof successCallback !== 'undefined') {
                        if (jQuery.isFunction(successCallback)) {
                            successCallback(parsedResponse);
                        }
                    }
                })
                .fail(function (xhr, status, error) {
                    errorCallback(xhr, status, error);

                });
    });
    form.submit();
    setModalContent(modalLoading);
}

function submitModalSuccess(response) {
    if (response.status == 0) {
        setModalContent(response.view);
    } else {
        $('#' + modalHolder).modal('hide');
        showSystemMessage('success', response.message);
    }
}

function submitModalError(xhr, status, error) {
    setModalContent(xhr.responseText);
    $('#add-order-modal').html(xhr.responseText);
}

function setModalContent(content) {
    $('#' + modalHolder + '>.modal-dialog>.modal-content').html(content);
    //Close Menu if in mobile view
    if ($('body').hasClass('nav-sm') && $('body').width() <= 991) {
        $('body').removeClass('nav-sm');
        $('body').addClass('nav-md');
    }
}

function getModal(module, view, callBack) {

    setModalContent(modalLoading);

    $.get("/ajax/" + module + "/modal/" + view)
            .done(function (response) {
                setModalContent(JSON.parse(response));
                if (jQuery.isFunction(callBack)) {
                    callBack();
                }
            })
            .fail(function (xhr, status, error) {
                setModalContent(xhr.responseText);
            });
}

function showSystemMessage(type, msg) {
    if (alertIsActive && type == alertTpe) {
        $(".msg-" + type).append('<br>' + msg);
    } else {
        alertIsActive = true;
        alertTpe = type;
        $(".allert-" + type).removeClass('hidden');
        $(".alert-popup").toggle(10);
        $(".msg-" + type).html(msg);

        setTimeout(function () {
            $(".allert-" + type).toggleClass('allerted');

            setTimeout(function () {
                $('.allerted').removeClass('allerted');

                setTimeout(function () {
                    $(".msg-" + type).html('');
                    $(".alert-popup").toggle(1000);
                    $(".allert-" + type).addClass('hidden');
                    alertIsActive = false;
                    alertTpe = null;
                }, 2100);

            }, 3800);
        }, 100);
    }

}

function deleteRecord(module, id, callBack) {

    setModalContent(modalLoading);

    $.get("/ajax/" + module + "/delete/" + id)
            .done(function (response) {
                submitModalSuccess(JSON.parse(response));
                if (jQuery.isFunction(callBack)) {
                    callBack();
                }
            })
            .fail(function (xhr, status, error) {
                setModalContent(xhr.responseText);
            });
}



function initAuthorDialog() {
    setTimeout(function () {
        $('#btn-submit').click(function () {
            var execute = null;
            if (typeof submitAuthorSuccess !== 'undefined') {
                execute = submitAuthorSuccess;
            } else {
                execute = submitModalSuccess;
            }
            submitModalForm('add-author-modal-form', execute, submitModalError);
        });
    }, 1000);
}