forms = document.querySelectorAll('form');
ps = document.querySelectorAll('p');

if (ps[0].classList.contains('underline')) {
	forms[0].classList.remove('hidden');
	forms[1].classList.add('hidden');
}else if (ps[1].classList.contains('underline')) {
	forms[1].classList.remove('hidden');
	forms[0].classList.add('hidden');
}

ps[0].addEventListener('click', function(){
	ps[0].classList.add('underline');
	ps[1].classList.remove('underline');
	forms[0].classList.remove('hidden');
	forms[1].classList.add('hidden');
});

ps[1].addEventListener('click', function(){
	ps[1].classList.add('underline');
	ps[0].classList.remove('underline');
	forms[1].classList.remove('hidden');
	forms[0].classList.add('hidden');
});
