bar = document.querySelector('.line');
menus = document.querySelectorAll('.menu');
favoris = document.querySelector('.favoris');
account = document.querySelector('.account');
settings = document.querySelector('.settings');

console.log(favoris, account, settings);

function toRight(actuel, next) {
	setTimeout(() => {
		actuel.style.transform = 'translateX(50%)';
		actuel.style.opacity = '0';
	}, 100);
	setTimeout(() => {
		actuel.classList.add('hidden');
		next.classList.remove('hidden');
	}, 300);
	setTimeout(() => {
		next.style.transform = 'translateX(0)';
		next.style.opacity = '1';
	}, 500);
	next.classList.add('focus');
	actuel.classList.remove('focus');
}

function toleft(actuel, next) {
	setTimeout(() => {
		actuel.style.transform = 'translateX(-50%)';
		actuel.style.opacity = '0';
	}, 100);
	setTimeout(() => {
		actuel.classList.add('hidden');
		next.classList.remove('hidden');
	}, 300);
	setTimeout(() => {
		next.style.transform = 'translateX(0)';
		next.style.opacity = '1';
	}, 500);
	next.classList.add('focus');
	actuel.classList.remove('focus');
}

if (menus[1].classList.contains('focus')) {
	bar.style.left = '26%';
	bar.style.width = '8vw';
	if (account.classList.contains('focus')) {
		toRight(account, favoris);
	} else if (settings.classList.contains('focus')) {
		toRight(settings, favoris);
	}
} else if (menus[2].classList.contains('focus')) {
	bar.style.left = '43%';
	bar.style.width = '11vw';
	if (favoris.classList.contains('focus')) {
		toleft(favoris, account);
	} else if (settings.classList.contains('focus')) {
		toRight(settings, account);
	}
} else if (menus[3].classList.contains('focus')) {
	bar.style.left = '62%';
	bar.style.width = '10.5vw';
	if (favoris.classList.contains('focus')) {
		toleft(favoris, settings);
	} else if (account.classList.contains('focus')) {
		toleft(account, settings);
	}
}


menus.forEach(menu => {
	menu.addEventListener('click', () => {
		if (menu == menus[1]) {
			bar.style.left = '26%';
			bar.style.width = '8vw';
			if (account.classList.contains('focus')) {
				toRight(account, favoris);
			} else if (settings.classList.contains('focus')) {
				toRight(settings, favoris);
			}
		} else if (menu == menus[2]) {
			bar.style.left = '43%';
			bar.style.width = '11vw';
			if (favoris.classList.contains('focus')) {
				toleft(favoris, account);
			} else if (settings.classList.contains('focus')) {
				toRight(settings, account);
			}
		} else if (menu == menus[3]) {
			bar.style.left = '62%';
			bar.style.width = '10.5vw';
			if (favoris.classList.contains('focus')) {
				toleft(favoris, settings);
			} else if (account.classList.contains('focus')) {
				toleft(account, settings);
			}
		}
	})
})