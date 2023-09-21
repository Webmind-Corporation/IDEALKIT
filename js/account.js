bar = document.querySelector('.line');
selects = document.querySelectorAll('.select');
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

if (selects[0].classList.contains('focus')) {
	bar.style.left = '26%';
	bar.style.width = '8vw';
	if (account.classList.contains('focus')) {
		toRight(account, favoris);
	} else if (settings.classList.contains('focus')) {
		toRight(settings, favoris);
	}
} else if (selects[1].classList.contains('focus')) {
	bar.style.left = '43%';
	bar.style.width = '11vw';
	if (favoris.classList.contains('focus')) {
		toleft(favoris, account);
	} else if (settings.classList.contains('focus')) {
		toRight(settings, account);
	}
} else if (selects[2].classList.contains('focus')) {
	bar.style.left = '62%';
	bar.style.width = '10.5vw';
	if (favoris.classList.contains('focus')) {
		toleft(favoris, settings);
	} else if (account.classList.contains('focus')) {
		toleft(account, settings);
	}
}


selects.forEach(select => {
	select.addEventListener('click', () => {
		if (select == selects[0]) {
			bar.style.left = '26%';
			bar.style.width = '8vw';
			if (account.classList.contains('focus')) {
				toRight(account, favoris);
			} else if (settings.classList.contains('focus')) {
				toRight(settings, favoris);
			}
		} else if (select == selects[1]) {
			bar.style.left = '43%';
			bar.style.width = '11vw';
			if (favoris.classList.contains('focus')) {
				toleft(favoris, account);
			} else if (settings.classList.contains('focus')) {
				toRight(settings, account);
			}
		} else if (select == selects[2]) {
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