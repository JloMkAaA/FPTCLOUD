
function setCookie(name, value) {
	document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + "; path=/";
}
function getCookie(name) {
	let matches = document.cookie.match(new RegExp(
		"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	));
	return matches ? decodeURIComponent(matches[1]) : undefined;
}

function getTheme() {
	return (getCookie('darkTheme') == 'true');
}

function setTheme(theme) {

	if (theme == false) {
		document.body.style = 'background:black; color:white';
		let text = document.getElementsByClassName('me-3');
		// text.style.color = 'red';
	}
	else {
		document.body.style = 'background:white; color:#c4c3ca';
	}

}

setTheme(getTheme());

themeSwitch.addEventListener('click', function () {
	const darkTheme = !getTheme();
	setCookie('darkTheme', darkTheme);
	setTheme(darkTheme);
	themeSwitch.innerText = darkTheme ? 'темная тема' : 'светлая тема';
});

	// if (element.classList.contains(darkTheme ? 'btn-white' : 'btn-dark')) {
	// 	element.classList.remove(darkTheme ? 'btn-white' : 'btn-dark');
	// 	element.classList.add(darkTheme ? 'btn-dark' : 'btn-white');
	// }

	// let elements = document.body.getElementsByTagName('*');
	// for (let index = 0; index < elements.length; index++) {
	// 	const item = elements[index];

	// 	if (item.classList.contains(darkTheme ? 'bg-light' : 'bg-dark')) {
	// 		item.classList.remove(darkTheme ? 'bg-light' : 'bg-dark');
	// 		item.classList.add(darkTheme ? 'bg-dark' : 'bg-light');
	// 	}

	// 	if (item.classList.contains(darkTheme ? 'navbar-light' : 'navbar-dark')) {
	// 		item.classList.remove(darkTheme ? 'navbar-light' : 'navbar-dark');
	// 		item.classList.add(darkTheme ? 'navbar-dark' : 'navbar-light');
	// 	}
	// }

