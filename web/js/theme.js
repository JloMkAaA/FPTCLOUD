
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
	themeSwitch.innerText = theme ? 'Вкл.' : 'Выкл.';

	if (theme == false) {
		document.body.style = 'background:silver; color:black';
	
		
	}
	else {
		document.body.style = 'background:white; color:#c4c3ca';
	}
	
}

setTheme(getTheme());

function changeTheme() {
	const darkTheme = !getTheme();
	setCookie('darkTheme', darkTheme);
	setTheme(darkTheme);

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
}

