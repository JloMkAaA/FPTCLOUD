var cookies = document.cookie;
// выведем куки в консоль браузера
console.log(cookies);
Cookies.set('nameCookie', 'valueCookie'); // => "nameCookie=valueCookie; path=/"
Cookies.set('nameCookie', 'valueCookie', { expires: 30 }); // => "nameCookie=valueCookie; path=/;"
Cookies.set('nameCookie', 'valueCookie', { expires: 365, path: '' });
Cookies.get('nameCookie'); // => "valueCookie"
Cookies.get('otherCookie'); // => undefined
