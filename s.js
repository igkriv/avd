// https://learn.javascript.ru/task/numeric-input
function getChar(event) {
	if (event.which == null) {
		if (event.keyCode < 32) return null;
		return String.fromCharCode(event.keyCode) // IE
	}

	if (event.which != 0 && event.charCode != 0) {
		if (event.which < 32) return null;
		return String.fromCharCode(event.which) // остальные
	}

	return null; // специальная клавиша
}

document.getElementById('dlinazh3').onkeypress = function(e) {

	e = e || event;

	if (e.ctrlKey || e.altKey || e.metaKey) return;

	var chr = getChar(e);

	// с null надо осторожно в неравенствах, т.к. например null >= '0' => true!
	// на всякий случай лучше вынести проверку chr == null отдельно
	if (chr == null) return;

	if (chr < '0' || chr > '9') {
		return false;
	}

}
document.getElementById('dlinazh4').onkeypress = function(e) {

	e = e || event;

	if (e.ctrlKey || e.altKey || e.metaKey) return;

	var chr = getChar(e);

	// с null надо осторожно в неравенствах, т.к. например null >= '0' => true!
	// на всякий случай лучше вынести проверку chr == null отдельно
	if (chr == null) return;

	if (chr < '0' || chr > '9') {
		return false;
	}

}
document.getElementById('dlinatr3').onkeypress = function(e) {

	e = e || event;

	if (e.ctrlKey || e.altKey || e.metaKey) return;

	var chr = getChar(e);

	// с null надо осторожно в неравенствах, т.к. например null >= '0' => true!
	// на всякий случай лучше вынести проверку chr == null отдельно
	if (chr == null) return;

	if (chr < '0' || chr > '9') {
		return false;
	}

}
document.getElementById('dlinatr4').onkeypress = function(e) {

	e = e || event;

	if (e.ctrlKey || e.altKey || e.metaKey) return;

	var chr = getChar(e);

	// с null надо осторожно в неравенствах, т.к. например null >= '0' => true!
	// на всякий случай лучше вынести проверку chr == null отдельно
	if (chr == null) return;

	if (chr < '0' || chr > '9') {
		return false;
	}

}