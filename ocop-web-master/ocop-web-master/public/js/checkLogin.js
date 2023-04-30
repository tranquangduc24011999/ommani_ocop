var isShowToastLogin = true;

function getStatusLogin() {
  $.ajax({
    url: "checkLogin",
    type: "GET",
    success: function (ret) {
      if (!ret) {
        if (isShowToastLogin) {
          $.toast({
            heading: 'Cảnh báo!',
            text: 'Kết nối không ổn định , bạn nên lưu dữ liệu để tránh mất dữ liệu.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'warning',
            hideAfter: false,
            stack: 6
          });
        }
        isShowToastLogin = false;
      } else {
        isShowToastLogin = true;
      }
    },
  })
};

if (!(window.location.pathname.search("login") > 0) && !(window.location.pathname.search("register") > 0)) {
  setInterval(getStatusLogin, 20000);
}
const getToken = () => {
  $.ajax({
    url: "checktoken",
    type: "GET",
    success: function (ret) {
      if (ret) {
        let token = getCookie('NAC0B')
        if (!token) {
          document.cookie = `NAC0B=${ret.token}`
        }
      }
    }
  })
}
getToken()
const getCookie = (c_name) => {
  var i, x, y, ARRcookies = document.cookie.split(";");
  for (i = 0; i < ARRcookies.length; i++) {
    x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
    y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
    x = x.replace(/^\s+|\s+$/g, "");
    if (x == c_name) {
      return unescape(y);
    }
  }
}

