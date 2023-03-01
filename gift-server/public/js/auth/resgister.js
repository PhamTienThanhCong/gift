const validateEmail = (email) => {
    return String(email)
        .toLowerCase()
        .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
};
function checkEmail(email) {
    if (validateEmail(email)) {
        return false;
    } else {
        return true;
    }
}
// show error
function showAlert(erorContent){
    swal({
        title: "Đăng ký thất bại",
        text: erorContent,
        icon: "error",
        button: "OK",
    });
}
// check password
function checkPassword(password) {
    if (password.length < 6) {
        return true;
    } else {
        return false;
    }
}
// check fullname
function checkFullname(fullname) {
    if (fullname.length < 2 || fullname.length > 32) {
        return true;
    } else {
        return false;
    }
}
$('#form-register').submit(function(e) {
    // get value input
    var fullname = $('#fullname').val();
    var email = $('#email').val();
    var password = $('#password').val();
    // check value input
    if (checkFullname(fullname)) {
        $('#fullname').addClass('form-error');
        e.preventDefault();
        showAlert("Vui lòng nhập tên của bạn trong khoảng từ 2 đến 32 ký tự");
    } else {
        $('#fullname').removeClass('form-error');
    }
    if (checkEmail(email)) {
        $('#email').addClass('form-error');
        e.preventDefault();
        showAlert("Vui lòng đúng định dạng email");
    } else {
        $('#email').removeClass('form-error');
    }
    if (checkPassword(password)) {
        $('#password').addClass('form-error');
        showAlert("Mật khẩu phải lớn hơn 6 ký tự");
        e.preventDefault();
    } else {
        $('#password').removeClass('form-error');
    }
});