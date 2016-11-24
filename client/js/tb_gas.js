var d = document;
function processar(idTabela)
{
	var newRow = d.createElement('tr');
	newRow.insertCell(0).innerHTML = d.getElementsByName('user')[0].value;
	newRow.insertCell(1).innerHTML = d.getElementsByName('senha')[0].value;
	d.getElementById(idTabela).appendChild(newRow);
	return false;
}