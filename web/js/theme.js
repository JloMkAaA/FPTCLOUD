
function setCookie(name, value) {
	document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + "; path=/";
}
function getCookie(name) {
	let matches = document.cookie.match(new RegExp(
	  "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	));
	return matches ? decodeURIComponent(matches[1]) : undefined;
  }
  

let darkTheme = false;

function changeTheme(element) {

	setCookie('darkTheme', darkTheme);


	element.innerText = (darkTheme = !darkTheme) ? 'Вкл.' : 'Выкл.';

	if (element.classList.contains(darkTheme ? 'btn-white' : 'btn-dark')) {
		element.classList.remove(darkTheme ? 'btn-white' : 'btn-dark');
		element.classList.add(darkTheme ? 'btn-dark' : 'btn-white');
	}

	let elements = document.body.getElementsByTagName('*');
	for (let index = 0; index < elements.length; index++) {
		const item = elements[index];

		if (item.classList.contains(darkTheme ? 'bg-light' : 'bg-dark')) {
			item.classList.remove(darkTheme ? 'bg-light' : 'bg-dark');
			item.classList.add(darkTheme ? 'bg-dark' : 'bg-light');
		}

		if (item.classList.contains(darkTheme ? 'navbar-light' : 'navbar-dark')) {
			item.classList.remove(darkTheme ? 'navbar-light' : 'navbar-dark');
			item.classList.add(darkTheme ? 'navbar-dark' : 'navbar-light');
		}
	}
}
