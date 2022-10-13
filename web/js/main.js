
let flag = false;

function changeTheme(element) {
	element.innerText = (flag = !flag) ? 'Вкл.' : 'Выкл.';

	if (element.classList.contains(flag ? 'btn-white' : 'btn-dark')) {
		element.classList.remove(flag ? 'btn-white' : 'btn-dark');
		element.classList.add(flag ? 'btn-dark' : 'btn-white');
	}

	let elements = document.body.getElementsByTagName('*');
	for (let index = 0; index < elements.length; index++) {
		const item = elements[index];

		if (item.classList.contains(flag ? 'bg-light' : 'bg-dark')) {
			item.classList.remove(flag ? 'bg-light' : 'bg-dark');
			item.classList.add(flag ? 'bg-dark' : 'bg-light');
		}

		if (item.classList.contains(flag ? 'navbar-light' : 'navbar-dark')) {
			item.classList.remove(flag ? 'navbar-light' : 'navbar-dark');
			item.classList.add(flag ? 'navbar-dark' : 'navbar-light');
		}
	}
}
